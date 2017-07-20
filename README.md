SOLID Principles in a nutshell
===================
1.Single Responsibility Principle
-------------

A class and method should have one and only one reason to change.

If a class has too many responsibilities, you need to refactor it.

Tips:
1. Avoid God classes (God classes are classes which have too many methods in it and try to perform everything).
2. Convert your steps in the small methods and name those methods in Plain English. (See images below)
3. Follow MVC Architecture. Keep UI, Business Logic and Data access layer separate.
4. Avoid Large classes and long methods. Break long methods in small methods

**Example Link**
https://google.com

**Small Methods Before**
![Alt text](/images/sip-before.png?raw=true)

**Small Methods After**
![Alt text](/images/sip-after.png?raw=true)

2.Open Close Principle
-------------

Software entities (classes, modules and methods) should be open for extension but closed for modification.

Tips:
1. Create abstract classes or interface and override the method in the inherited class.
2. If your program has too many if and switch statements, try to replace that part with the overridden method.
3. Implement Plug-in like mechanism

**Example Link**
https://google.com

3.Liskov Substitution Principle
-------------

Functions that use references to base classes must be able to use subjects of derived classes without knowing it.

Try to place object of child class at the place of parent class and check if your program works right. If you think, your program will throw an error if you replace object of parent class with child class, then it is violating Liskov Substitution Principle.

Tips:
1. Avoid usage of instanceof and is_a functions
2. Use Interface Segregation Principle to solve the LSP Problems

**Example Link**
https://google.com

4.Interface Segregation Principle
-------------

Clients should not be forced to depend upon the interfaces they do not use.

If you implement an interface or derive from a base class and you have to throw an exception in a method  because you don’t support it (or create blank body for any of the method), the interface is too big

Tips:
1. Create small interfaces with what you just need.

**Example Link**
https://google.com

5.Dependency Injection Principle
-------------

High level modules should not depend on low level modules. Both should depend upon abstractions.

Abstractions should not depend upon detail. Details should depend upon abstractions.

Remember to use DIP when you are going to use any 3rd party library or integrate any external application with your software

Tips:
1. Clearly mention your class dependencies in the constructor. Accept dependencies as parameters in the constructor.
2. Avoid hidden dependencies.
3. Extract dependencies into interfaces and pass interfaces as parameters
4. Avoid use of ‘new’ keyword in the method
5. Avoid using static methods or properties in the method
6. Use Dependency injection techniques.
        a. Dependency injection is a technique that is used to allow calling code to inject the dependencies a class needs when it is instantiated.
        b. Primary Dependency Injection Techniques
                i. Constructor Injection
                ii. Property (Setter) Injection

**Example Link**
https://google.com

Basics of MVC
-------------

Model => Data Layer (Data layer contains all the methods related to the data. It is not limited to the database.)
View => UI (Displays the output on screen)
Controller => Business Logic (Controls Program flow)

* View should interact with other views and Controllers
* Controllers should interact with other controllers, models and views
* Model should interact with other Models and Controllers
* View and Model should not interact with each other directly.

![Alt text](/images/mvc.png?raw=true)

Example:
1. Let’s assume, you are showing a page where list of all users are being displayed along with a button to add new user. This display part will come from ‘View’. When admin clicks a button to Add a new user, program will trigger the Controller associated with Adding new user action.
2. That controller will call the respective action. That action will perform all the necessary validations like if current user is allowed to add new user or not, or admin has entered valid data or not.
3. If validations are passed, action will call the User Model which would have a actual function to add a user into the database. After adding a user, model will return the information of that user to action who called it.
4. Now action will take that information, it will decide which view should be loaded and pass the information it obtained from Model to that view.

Following could be the pseudo controller for it.

![Alt text](/images/psuedo-controller.png?raw=true)

In above example, you will have at least two models
* Database Model (which has required methods to interact with database)
* User Model (which has required methods to operate on User related data)
