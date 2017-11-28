@include("partials.header")
    <div id="subject">
        <h2>Raum wählen</h2>
    </div>
    <nav class="overview">
        <a href="{{route("bewertungen", ["id" => 1])}}">Raum 1</a>
        <a href="{{route("bewertungen", ["id" => 2])}}">Raum 2</a>
        <a href="{{route("bewertungen", ["id" => 3])}}">Raum 3</a>
        <a href="{{route("bewertungen", ["id" => 4])}}">Raum 4</a>
    </nav>
@include("partials.footer")