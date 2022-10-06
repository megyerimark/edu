<h1>Tölts ki a mezőket</h1>
@if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li>
        {{ $error }}
    </li>


    @endforeach
</ul>
@endif

<form action="submit-animal" method="post">
    {{ csrf_field() }}
    <p>
        <label for=""> kutya: </label>
        <input type="text" name="name" placeholder="Kutya">
    </p>
    <p>
        <label for=""> macska: </label>
        <input type="text" name="email" placeholder="Macska">
    </p>
    <p>
        <label for=""> madár: </label>
        <input type="text" name="madar" placeholder="Madár">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form