# Context
School project at isep

# Description
Stimulus is a web application fro businesses. 

# Stack
The app is built from sratch without the use of any framework. Everything is written in PHP in an MVC strucutre.

# Infrastructure
Not defined yet, we'll see later

# App Strucure
ee

# Database
The schema can be accessed [here](https://dbdiagram.io/d/5e58d239a902a329289b2fa3)

# Workflow
10 Steps to follow when developing a new feature.
1. Make sure the user story is crystal clear. If not ask for more information.</br>

2. Make sure your git status is clean and your local repo is up to date.
```bash 
git status
git pull origin master
``` 

3. Create a new branch with the name of your feature.
```bash 
git checkout -b sexy-feature
```

4. Code your feature.

5. Push your branch and w Don't hesitate to make several commits for the same feature. 
```bash
git add .
git commit -m "sexy feature added"
git push origin sexy-feature
```

6. Write a descriptive pull request to explain your changes

7. Ask for a review from someone on the team.

8. Once your code is reviewed and merged, delete the branch.
```bash
git checkout master
git pull origin master
git branch -d sexy-feature
```

9. Be proud of yourself. I'm sure your feature is awesome and you're to! 

10. Let's code another feature? 
