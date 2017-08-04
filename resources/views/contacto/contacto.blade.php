<section id="contact">
    <div class="section-content">
        <h1 class="section-header">Contacto</h1>
    </div>
    
<div class="contact-section">
<div class="container">
   
    {!!Form::open(['route'=>'mail.store','method'=>'POST'])!!}
        <div class="col-md-6 form-line">
            <div class="form-group">
                <label for="name">Nombre:</label>
                {!! Form::text('name', null,(['class' => 'form-control','placeholder'=>'Nombre...'])) !!}
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">E-Mail</label>
                {!! Form::text('email', null,(['class' => 'form-control','placeholder'=>'E-Mail...'])) !!}
            </div>	
        </div>
        
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::textarea('mensaje', null,(['class' => 'form-control','placeholder'=>'Mensaje...'])) !!}
            </div>
        </div>
        <center>
        {!!Form::submit('SEND',['class'=>'btn btn-default'])!!}
        </center>
        <br>
    {!!form::close()!!}

</div>
</section>