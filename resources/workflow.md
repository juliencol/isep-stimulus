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