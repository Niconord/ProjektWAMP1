<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Insert til database</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<form method="post" action="insert.php">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="filmnavn">Filmnavn</label>
                <input class="form-control" type="text" name="data[filmnavn]" id="filmnavn" placeholder="Filmnavn" value="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="filmgenre">Film genre</label>
                <input class="form-control" type="text" name="data[filmgenre]" id="filmgenre" placeholder="Film genre" value="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="filmbeskrivelse">Film beskrivelse</label>
                <input class="form-control" type="text" name="data[filmbeskrivelse]" id="filmbeskrivelse" placeholder="Film beskrivelse" value="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="filmlængde">Filmens Længde</label>
                <input class="form-control" type="text" name="data[filmlænge]" id="filmlængde" placeholder="Filmens længde" value="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="filmproducer">Filmens Producer</label>
                <input class="form-control" type="text" name="data[filmproducer]" id="filmproducer" placeholder="Filmens producer" value="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="filmstjerner">Filmens Stjerner</label>
                <input class="form-control" type="text" name="data[filmstjerner]" id="filmstjerner" placeholder="Filmens stjerner" value="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="filmrelease">Filmens release dato</label>
                <input class="form-control" type="text" name="data[filmrelease]" id="filmrelease" placeholder="Hvornår kommer filmen ud?" value="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="filmstoryline">Filmens storyline</label>
                <input class="form-control" type="text" name="data[filmstoryline]" id="filmstoryline" placeholder="Filmens storyline" value="">
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="filmfunfact">Filmens fun fact</label>
                <input class="form-control" type="text" name="data[filmfunfact]" id="filmfunfact" placeholder="Filmens fun facts" value="">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for=""></label>
                <textarea class="form-control" name="data[]" id="filmbeskrivelse">Film beskrivelse</textarea>
            </div>
        </div>
        <div class="col-12 col-md-6 offset-md-6">
            <button class="form-control btn btn-primary" type="submit" id="btnSubmit">Gem din film her</button>
        </div>
    </div>
</form>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

