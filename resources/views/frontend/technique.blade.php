@extends('frontend.template.template')

@section('content')
    	<!-- contact form -->
    <div class="container mt-5">
        <form>
            <div class="form-row">
              <div class="form-group col-md-6 d-none">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
              </div>
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email :</label>
                <input type="email" class="form-control" id="inputEmail4">
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">Quel etage :</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">Quel local :</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Sujet :</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-6">
                <label for="image">Selctionner une image :</label>
                <input type="file" value="" class="form-control" name="src" id="image">
              </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description :</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
              </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
        </div>
@endsection