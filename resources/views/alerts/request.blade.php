@if(count($errors)>0)
    <div class="chip red lighten-2 white-text text-white col s12 m12 l12">
        <i class="close material-icons">close</i>
            <ul style="list-style-type:none">
                @foreach($errors->all() as $error)
                <li>{!!$error!!}</li>
                @endforeach
            </ul>
    </div>
@endif

