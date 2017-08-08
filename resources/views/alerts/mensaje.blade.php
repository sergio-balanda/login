@if(Session::has('message'))
    <div class="chip red lighten-2 white-text text-white col s12 m12 l12">
        {{Session::get('message')}}
        <i class="close material-icons">close</i>
    </div>
@endif