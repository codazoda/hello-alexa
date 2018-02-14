# Hello Alexa

A super simple Alexa Skill written in PHP. You'll say a command like:

_Alexa, Ask hello to say hi_

Your command will vary slightly based on the settings you choose when you add the skill to the Amazon Developer Tools. The format is the following.

_Alexa, Ask [skill name] to [in name]_

## Adding your skill to Amazon

There's a GUI for this. A lot of the language is confusing at first. Relax and take your time. Here are the basic steps as of this writing.

- Go to https://developer.amazon.com
- Select the _Alexa_ tab
- Click _Get Started_ under _Alexa Skills Kit_
- Add a New Skill
- Under _Skill Information_ enter a _Name_ of `Hello` and a _Invocation Name_ of `hello`
- Create the _Interaction Model_ using the _Skill Builder_ (beta currently)
- Add a new _Intent_ called _hi_
- Add a _Sample Udderance_ of `ask hello to say hi`
- Click the _Build Model_ button
- Under _Configuration_ choose _HTTPS_ and enter your skill URL under _Default_
- Test your skill in the Test Simulator (it must be on an internet available server with HTTPS)