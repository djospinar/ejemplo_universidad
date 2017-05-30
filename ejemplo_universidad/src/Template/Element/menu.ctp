<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
              
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estudiantes<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Estudiantes', array('controller'=>'students', 'action'=>'index'))?></li>
                <li><?php echo $this->Html->link('Nuevo Estudiante', array('controller'=>'students', 'action'=>'add'))?></li>
                
              </ul>  
            </li>
              
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profesores<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Profesores', array('controller'=>'teachers', 'action'=>'index'))?></li>
                <li><?php echo $this->Html->link('Nuevo Profesor', array('controller'=>'teachers', 'action'=>'add'))?></li>
                
              </ul>  
            </li>
              
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cursos<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista Cursos', array('controller'=>'courses', 'action'=>'index'))?></li>
                <li><?php echo $this->Html->link('Nuevo Cursos', array('controller'=>'courses', 'action'=>'add'))?></li>
                
              </ul>  
            </li>
              
              
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>