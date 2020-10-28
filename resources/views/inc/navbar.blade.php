<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link {{Request::is('/')? 'active' : ''}}"href="/"> Home </a>
        </li>
        <li class="nav-item {{Request::is('todo/create') ? 'active' : ''}}">
          <a class="nav-link" href="todo/create">Create</a>
        </li>
              
      </ul>
        </div>
  </nav>