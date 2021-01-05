@extends('layouts.panel')

@section('title','G2A Tracking - Rileystech')

@section('panel_title')
    @include('portfolio.projects._sections.back_button')
    <b>G2A Tracking System</b>
@endsection

@section('content')
    @include('portfolio.projects._sections.banner_image',['img'=>'/images/projects/aboutg2atracker1.png'])
    <p>G2a tracking system is a suite of software I created to streamline the process of buying and selling game keys on G2A. The entire system is comprised of many subsystems that come together to form a system that make the process as easy as possible.<br><b>NOTE:</b> THis system is no longer in use.</p>
    <br>
    <h3>Backend updating service</h3>
    <p>The backend is comprised of a windows service that gets the most recent list of games from the database that are being tracked and need to be updated. It then queries G2A’s api and records the statistics for each game.  </p>
    <p>To start tracking a game, one of two things happens. A user can enter the the link to the game into the <a href="#" class="text-black hover:text-blue-700">portal</a>,  and the update service does its thing. The second thing that can happen is one of the analyzation applications can request data for a game that isn't currently being tracked, and it gets added that way.</p>
    <br>
    <h3>Analyzation Applications</h3>
    <p>Each analyzation application essentially has the same task, to gather data about the game bundles for sale on the site, and determine whether or not they are profitable. Each application retrieves the webpage for the particular site it is associated with, and then checks with the backend updating service to retrieve the most recent price for the game. After doing this for each and every game, it calculates the associated fees with selling the game, and determines if it is profitable or not.</p>
    <!--<h4>Links</h4>
    <ul>
        <li><a href="/bundlestaranalyzer">Humble Bundle Analyzer</a></li>
        <li><a href="/humblebundleanalyzer">Bundlestar Analyzer</a></li>
        <li><a href="/cubicbundleanalyzer">Cubic Bundle Analyzer</a></li>
    </ul>-->

    <h3>Frontend</h3>
    <p>The frontend is pretty simple, as all the real work is being done in the background. From the <a href="#" class="text-black hover:text-blue-700">main page</a>, you can enter a link directly to bring up the page on that game. From here there is a nice graph that displays the price history and amount sold in the past day, week, or months. Additionally, you can view a list of all the games currently being tracked <a href="#" class="text-black hover:text-blue-700">here</a>.</p>
    <br>
    <h3>Keymanager</h3>
    <p>After buying a ton of games, it became tedious to keep track of what was sold, what was currently listed, how much I had paid, etc. for every game. Thus I created a keymanager to to all of the work for me. The keymanager is where all of the post sale data gets inputted. It allows me to easily see my entire inventory of games. It is complete with a full set of sorting and filtering options to meet my needs. It has options to import a bulk list of keys from a CSV, and a direct link to the marketplace to sell the keys. It also ties into the backend update service to display the prices of each game if I wanted to sell the game right now, as well as a link to view the price and sale history.</p>
    <br>
    <h3>Aggregator</h3>
    <p>The aggregator is sort of like mission control. It pulls data from each of the Analyzation Applications to get the profitable game bundles that are available on each site. If the profitability exceeds a certain threshold, it sends me an email telling me that there is an opportunity to make some money. The aggregator also serves one other purpose, to monitor the status of the backend, to make sure that there are no problems with it. If there ever were to be a problem, it would show up in my inbox. </p>
@endsection