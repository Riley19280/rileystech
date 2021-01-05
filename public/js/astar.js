
//helper
function removeFromArray(arr, el) {
    var index = arr.indexOf(el);

    if(index != -1)
        arr.splice(index,1);
}


function heuristic(neighbor, end) {
    return  Math.sqrt( Math.pow((neighbor.x-end.x), 2) + Math.pow((neighbor.y-end.y), 2) );
}

function pass() {

}


$(document).on('click','#runbutton',function () {
    rows = $('#yamt').val() || 50;
    cols = $('#xamt').val() || 50;

    $('#myCanvas').attr({
        'width':  $('#width').val() || 600,
        'height' : $('#height').val() || 600
    });


    var sx,sy,ex,ey,density;
    sx =  $('#xstart').val();
    sy =  $('#ystart').val();
    ex =  $('#xend').val();
    ey =  $('#yend').val();
    density =  $('#walldensity').val() || .3;

    errors = [];
    if(sx && sy)
        if((sx >=0 && sx <= cols - 1) && (sy >=0 && sy <= rows - 1)  )
            pass();
        else
            errors.push("Invalid bounds for start point.");
    else
        errors.push('Values not specified for starting point, Using default.');

    if(ex && ey)
        if((ex >=0 && ex <= cols - 1) && (ey >=0 && ey <= rows - 1)  )
            pass();
        else
            errors.push("Invalid bounds for end point.");
    else
        errors.push('Values not specified for ending point, Using default.');

    if(density < 0 || density >1)
        errors.push('Invalid well density');


    if(errors.length > 0){
        var str = "";

        for(var i = 0; i < errors.length; i++)
            str += errors[i]+"\n";

        alert(str);
    }
    else
        astar(sx,sy,ex,ey,density);

    if(finished)
        $('#log').append("\nTarget achieved.");
    else
        $('#log').append("\nDestination unreachable.");

    var log = $('#log');
    if(log.length)
        log.scrollTop(log[0].scrollHeight - log.height());
})

$(document).ready(function () {
    canvas = document.getElementById("myCanvas");
    ctx = canvas.getContext("2d");
    ctx.fillStyle = "#FF0000";
});


//canvas stuff
var canvas = null;
var ctx = null;


var errors = [];
///rows and cols for the amount of boxes in a*
var rows = 50;
var cols = 50;
var grid;
var finished = false;

function astar(sx,sy,ex,ey,density) {
    finished = false;

    //A* stuff

    grid = new Array(cols);

    var openset = [];
    var closedset = [];

    var path = [];

    var start, end;

    function Spot(x, y) {
        this.x = x;
        this.y = y;

        this.f = 0;
        this.g = 0;
        this.h = 0;

        this.neighbors = [];
        this.prev = null;


        this.wall = Math.random() < density;

        this.Show = function (color) {
            var w = ($('#width').val() || 600) / cols;
            var h = ($('#height').val() || 600) / rows;

            if (this.wall)
                color = '#000000';
            ctx.fillStyle = color;
            ctx.fillRect(x * w, y * h, w - 2, h - 2);
        };

        this.addNeighbors = function (grid) {
            var x = this.x;
            var y = this.y;
            if (x < cols - 1)
                this.neighbors.push(grid[x + 1][y]);
            if (x > 0)
                this.neighbors.push(grid[x - 1][y]);
            if (y < rows - 1)
                this.neighbors.push(grid[x][y + 1]);
            if (y > 0)
                this.neighbors.push(grid[x][y - 1]);
            if (x > 0 && y > 0) {
                this.neighbors.push(grid[x - 1][y - 1]);
            }
            if (x < cols - 1 && y > 0) {
                this.neighbors.push(grid[x + 1][y - 1]);
            }
            if (x > 0 && j < rows - 1) {
                this.neighbors.push(grid[x - 1][y + 1]);
            }
            if (x < cols - 1 && y < rows - 1) {
                this.neighbors.push(grid[x + 1][y + 1]);
            }
        };
    }


    //make 2d array
    for (var i = 0; i < cols; i++)
        grid[i] = new Array(rows);

    //fill with spots
    for (var i = 0; i < cols; i++)
        for (var j = 0; j < rows; j++)
            grid[i][j] = new Spot(i, j);

    //calculate neighbors
    for (var i = 0; i < cols; i++)
        for (var j = 0; j < rows; j++)
            grid[i][j].addNeighbors(grid);

    //set start and end positions for the function
    start = grid[sx][sy];
    end = grid[ex][ey];
    start.wall = false;
    end.wall = false;



    //begin A*
    openset.push(start);
    while (openset.length > 0) {
        var lowestFIdx = 0;
        for (var i = 0; i < openset.length; i++) {
            if (openset[i].f < openset[lowestFIdx].f)
                lowestFIdx = i;
        }

        var current = openset[lowestFIdx];

        removeFromArray(openset, current);
        closedset.push(current);


        var neighbors = current.neighbors;

        for (var i = 0; i < neighbors.length; i++) {
            var neighbor = neighbors[i]
            //if not is out then no reason to check it

            if (!closedset.includes(neighbor) && !neighbor.wall) {
                var newg = current.g + 1;      //adding one because neighbor is one dist away

                var newpath = false;
                if (openset.includes(neighbor)) {
                    if (newg < neighbor.g) {
                        neighbor.g = newg;
                        newpath = true;
                    }
                }
                else {
                    neighbor.g = newg;
                    openset.push(neighbor);
                    newpath = true
                }

                if (newpath) {
                    //the path is better than the one we have now
                    neighbor.h = heuristic(neighbor, end);
                    neighbor.f = neighbor.g + neighbor.h;
                    neighbor.prev = current;
                }
            }
        }

        /*DEBUG------------------*/

        //reconstruct path
        path = [];
        var temp = current;
        path.push(temp);
        while (temp.prev) {
            path.push(temp.prev);
            temp = temp.prev;
        }

        if (current === end) {
            finished = true;
            break;
        }

    }

    //draw debug
    for (var i = 0; i < cols; i++)
        for (var j = 0; j < rows; j++)
            grid[i][j].Show('#AAAAAA');

    for (var i = 0; i < openset.length; i++)
        openset[i].Show('#00FF00');

    for (var i = 0; i < closedset.length; i++)
        closedset[i].Show('#FF0000');
    //draw path
    for (var i = 0; i < path.length; i++)
        path[i].Show('#0000FF');
}
