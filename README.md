# Context
School project at isep.

# Description
Stimulus is a web application.

# Stack
The app is built from scratch without the use of any framework. Everything is written in PHP in an MVC structure. For the database we use MySQL and PDO.

# Infrastructure
Not defined yet, we'll see that later.

# Database
The schema can be accessed [here](https://dbdiagram.io/d/5e58d239a902a329289b2fa3).

# Development Workflow
Steps to follow when developing a new feature.
1. Make sure the user story is crystal clear then drag it to the Work in Progress section in Trello.</br>

2. Make sure your git status is clean and you have the latest changes locally.
```bash 
git status
git pull origin master
``` 

3. Create a new branch with the name of your feature.
```bash 
git checkout -b sexy-feature
```

4. Code your feature. You know how to do that.

5. Push your branch and don't hesitate to make several commits for the same feature. 
```bash
git add .
git commit -m "sexy feature added"
git push origin sexy-feature
```

6. Write a descriptive pull request to explain your changes.

7. Ask for a review from someone on the team.

8. Once your code is reviewed and merged, retrieve the changes to the master branch then delete the feature branch.
```bash
git checkout master
git pull origin master
git branch -d sexy-feature
```

9. Be proud of yourself. I'm sure your feature is awesome and you're to! 

10. Let's code another feature? 

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

# How to review code?
1. Fetch the latest branches 
```bash 
git fetch
```
2. Switch to the branch of the feature you want to review
```bash 
git checkout sexy-feature
```
3. Run a server and observe the changes. Make sure everything is fine.

4. Dive into the code and make sure it's clean. If not feel free to update it.

5. If everything is perfect just merge the pull request on github. If not write a descriptive comments to explain bugs and imperfections.



