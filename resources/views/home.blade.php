@foreach ($movies as $movie)
    <h1>{{$movie -> title}}</h1>
@endforeach

<style>
    h1{
        float: left;
        padding: 25px;
        border: 1px solid black;
        margin: 35px;
    }
</style>