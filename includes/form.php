
<h3>Dodaj nowy obraz</h3>
<hr>


<form id="sliderForm" method="POST" enctype="multipart/form-data" action="resources/save.php">
    <label for="name">Nazwa</label>
    <input type="text" name="name"><span id="nameInfo"></span>
    <br>
    <input type="hidden" value="1000000" name="MAX_FILE_SIZE">
    <br>
    <label for="file">Wybierz obraz z dysku</label>
    <span id="uploadInfo">Nie wybrano pliku!</span><br>
    <input type="file" name="file" value="Wybierz">

    <br>
    <button type="submit" name="sub">Wyślij</button>
</form>



