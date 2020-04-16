<?php
  // Users routes
  Route::set('users/home.php', function() { 
    Application::CreateView('users', 'home'); 
  });
  Route::set('users/sign_in.php', function() { 
    Application::CreateView('users', 'sign_in'); 
  });
  Route::set('users/sign_up.php', function() { 
    Application::CreateView('users', 'sign_up'); 
  });
  Route::set('users/index.php', function() { 
    Application::CreateView('users', 'index'); 
  });
?>  