<section id="contact">
    
    <h4>
        <a class="btn btn-floating pulse  red lighten-2">
            <i class="material-icons">email</i>
        </a>
        Contacto
    </h4>
    
<div class="contact-section">

    <div class="row">
    {!!Form::open(['route'=>'mail.store','method'=>'POST','class'=>'col s12 l12'])!!}
        
        <div class="col s12 l6">
            <div class="finput-field col s12 l12">
                <label for="name">Nombre:</label>
                {!! Form::text('name', null,(['class' => 'validate','placeholder'=>'Nombre...','required'])) !!}
            </div>
            <div class="input-field col s12 l12">
                <label for="exampleInputEmail">E-Mail</label>
                {!! Form::text('email', null,(['class' => 'validate','placeholder'=>'E-Mail...','required'])) !!}
            </div>	
        </div>
        
        
        <div class="col s12 l6">
            <div class="input-field col s12 l12">
                <i class="material-icons prefix">mode_edit</i>
                {!! Form::textarea('mensaje', null,(['class' => 'materialize-textarea','placeholder'=>'Mensaje...','required'])) !!}
            </div>
        </div>
        
        <div class="col s12 l12">
            <center>
                 {!!Form::submit('ENVIAR',['class'=>'btn waves-effect waves-light red lighten-2'])!!}
            </center>
        </div>
        <br>
    {!!form::close()!!}
    </div>

</section>