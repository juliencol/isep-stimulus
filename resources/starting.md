# Where to start when developing a feature?
1. First you will need to define a route. To do that go to 'config.routes.php' and the following line:
```
Route::set('controller_name/action_name.php', function() { Application::CreateView('controller_name', 'action_name'); });
```

2. Check if the controller you are working with is already created in app/controller. If not create a new file 'controller_name.php' and declare it inside with the following syntax:
```
class Application extends Controller {}
```

4. Create your view associated with your controller's action in 'app/views/controller_name/action_name.php'. This is where you will write your html.

5. Create a CSS file for your page in app/stylesheets/pages. 

6. Import your CSS file in app/stylesheets/application.css with the following syntax:
```
@import "pages/controller_name/action_name.css";
```

7. Include your CSS file in app/stylesheets/shylesheets.php with the following syntax:
```
require("pages/controller_name/action_name.css");
```

8. If needed, you can always create new css components in app/stylesheets/components. Remember the idea is always to refactor code and user components accross the app instead of rewriting everything. 

If you are just working on a frontend component, you don't need to do all of that.