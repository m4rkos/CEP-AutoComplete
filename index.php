<?php #INDEX
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Search CEP by Address</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <br>
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="zip">CEP</label>
                          <input type="text"
                            class="form-control" name="zip" id="zip" aria-describedby="helpId" placeholder="" maxlength="10">
                          <small id="helpId" class="form-text text-muted">Digite o cep sem "." ou "-"</small>
                        </div>

                        <h3 style="color: red;" id="erro"></h3>
                        
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="state">Estado</label>
                                    <input type="text"
                                    class="form-control" name="state" id="state" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Caso não seja encontrado via busca do cep.</small>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="city">Cidade (localidade)</label>
                                    <input type="text"
                                    class="form-control" name="city" id="city" aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Caso não seja encontrado via busca do cep.</small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="neighborhood">Bairro</label>
                          <input type="text"
                            class="form-control" name="neighborhood" id="neighborhood" aria-describedby="helpId" placeholder="">
                          <small id="helpId" class="form-text text-muted">Caso não seja encontrado via busca do cep.</small>
                        </div>
                        <div class="form-group">
                          <label for="street">Rua</label>
                          <input type="text"
                            class="form-control" name="street" id="street" aria-describedby="helpId" placeholder="">
                          <small id="helpId" class="form-text text-muted">Caso não seja encontrado via busca do cep.</small>
                        </div>
                        <div class="form-group">
                          <label for="number">Numero</label>
                          <input type="text"
                            class="form-control" name="number" id="number" aria-describedby="helpId" placeholder="">
                          <small id="helpId" class="form-text text-muted">Digite o numero da casa ou apartamento.</small>
                        </div>

                        <input type="submit" class="btn btn-secondary btn-lg" name="ok" value="enviar >">
                    </form>
                </div>
            </div>
        </div>
        

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="./js/ajax-search-cep.js"></script>
    </body>
</html>