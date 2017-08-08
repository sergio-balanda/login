<nav class="white col s12 m12 l12">
  <div class="nav-wrapper">
   {!! Form::open(array(
    'url'=>'admin',
    'method'=>'GET',
    'autocomplete'=>'off',
    'role'=>'search'))
    !!}

    <div class="input-field">
        <div class="input-group">
            <input type="search" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}" id="search">
            
            <label class="label-icon" for="search">
                <i class="material-icons">search</i>
            </label>
            
            <i class="material-icons">close</i>
            
        </div>
    </div>    
{!!Form::close()!!}
</div>
</nav>