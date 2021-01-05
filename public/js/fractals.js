/**
 * Created by riley on 1/22/2017.
 */

$(document).ready(function () {
    var c = document.getElementById("fractalcanvas");
    var ctx = c.getContext("2d");

    var w = 400;
    var h = 400;
    c.width = w;
    c.height = h;

    var angle = 45;
    var startpos = [w/2,h]
    var branches = [];
    var scalefactor = parseFloat(document.getElementById("fractalbranchFactor").value)
    var startsize =	parseInt(document.getElementById("fractalstartsize").value);
    var randomangles = [false,10,80];

    count=0;

    $('#startbutton').click(function () {
        fractalGUI()
    })
    $('#fractalangle,#fractalbranchFactor,#fractalstartsize,#fractalrandomangmin,#fractalrandomangmax').on('input',function () {
        fractalGUI()
    })
    $('#fractalrandomang').change(function () {
        fractalcheckboxGUI()
    })

    go();

    function go(){
        branches = [];
        ctx.clearRect(0, 0, w, h);
        count=0;

        var j = new branch([startpos[0],startpos[1]],0,startsize);
        branches.push(j);



        for(var i=0;i<branches.length;i++)
        {
            branches[i].draw();
        }

    }

    function fractalGUI(){
    //resizing canvas
        /* w = parseInt(document.getElementById("cvsizex").value);
         h = parseInt(document.getElementById("cvsizey").value);
         c.width = w;
         c.height = h;
         startpos = [w/2,h]*/

        scalefactor = parseFloat(document.getElementById("fractalbranchFactor").value)
        startsize =	parseInt(document.getElementById("fractalstartsize").value);
        angle = parseFloat(document.getElementById("fractalangle").value);

        fractalcheckboxGUI();

        go();
    }

    function branch(s,deg,len) {
        this.start = s;
        this.len = len;
        this.deg = deg;
        this.end = rotate(this.start,degToRad(this.deg),this.len);

        this.draw = function () {
            ctx.beginPath();
            ctx.moveTo(this.start[0],this.start[1]);
            ctx.lineTo(this.end[0],this.end[1]);
            if(this.len<30)
                ctx.strokeStyle="#65EF3E";
            else
                ctx.strokeStyle="#f4a460";
            ctx.stroke();
        }

        this.continue = function(){
            if(randomangles[0])
                angle =((randomangles[2]-randomangles[1])* Math.random()) + randomangles[1];
            count++;

            branches.push(new branch(this.end,angle+(this.deg),this.len*scalefactor));
            branches.push(new branch(this.end,-angle+(this.deg),this.len*scalefactor));
        }

        if(this.len >3)
            this.continue();
    }

    function fractalcheckboxGUI(){

        randomangles[0] = document.getElementById("fractalrandomang").checked;
        randomangles[1] = parseFloat(document.getElementById("fractalrandomangmin").value);
        randomangles[2] = parseFloat(document.getElementById("fractalrandomangmax").value);
        if(randomangles[0])
            $('#fractalminmaxangle').css('visibility','visible')
        else
            $('#fractalminmaxangle').css('visibility','hidden')


    }

    function degToRad(deg){
        return (270+deg)*0.0174533;
    }

    function rotate(start,deg,len) {
        this.start = start;
        this.deg = deg;
        this.len = len;

        this.x = Math.cos(deg)*len;
        this.y = Math.sin(deg)*len;

        return [this.start[0]+x,this.start[1]+y];
    }
})