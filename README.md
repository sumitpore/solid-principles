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
<https://github.com/sumitpore/solid-principles/tree/master/SRP%20and%20DIP>

**Before SRP:**

![Alt text](/images/sip-before.png?raw=true "Small Methods Before")

**After SRP:**

![Alt text](/images/sip-after.png?raw=true "Small Methods After")

2.Open Close Principle
-------------

Software entities (classes, modules and methods) should be open for extension but closed for modification.

Tips:
1. Create abstract classes or interface and override the method in the inherited class.
2. If your program has too many if and switch statements, try to replace that part with the overridden method.
3. Implement Plug-in like mechanism

**Example Link**
<https://github.com/sumitpore/solid-principles/tree/master/OCP>

3.Liskov Substitution Principle
-------------

Functions that use references to base classes must be able to use subjects of derived classes without knowing it.

Try to place object of child class at the place of parent class and check if your program works right. If you think, your program will throw an error when you replace object of parent class with child class, then it is violating Liskov Substitution Principle.

Tips:
1. Avoid usage of instanceof and is_a functions
2. Use Interface Segregation Principle to solve the LSP Problems

**Example Link**
<https://github.com/sumitpore/solid-principles/tree/master/LSP>

4.Interface Segregation Principle
-------------

Clients should not be forced to depend upon the interfaces they do not use.

If you implement an interface or derive from a base class and you have to throw an exception in a method  because you don’t support it (or create blank body for any of the method), the interface is too big

Tips:
1. Create small interfaces with what you just need.

**Example Link**
<https://github.com/sumitpore/solid-principles/tree/master/ISP>

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
5. Use Dependency injection techniques.
    1. Dependency injection is a technique that is used to allow calling code to inject the dependencies a class needs when it is instantiated.
    2. Primary Dependency Injection Techniques
        1. Constructor Injection
        2. Property (Setter) Injection

**Example Link**
<https://github.com/sumitpore/solid-principles/tree/master/SRP%20and%20DIP>

Basics of MVC
-------------

> Model => Data Layer (Data layer contains all the methods related to the data. It is not limited to the database.) It should enforce all the business rules that apply to that data.

> View => UI (Displays the output on screen)

> Controller => Business Logic (Controls Program flow)

* View should interact with other views and Controllers
* Controllers should interact with other controllers, models and views
* Model should interact with other Models and Controllers
* View and Model should not interact with each other directly.

![Alt text](/images/mvc.png?raw=true)

In modern php frameworks, you will find one more layer i.e. 'Routing'. This layer is responsbile for deciding a controller to be invoked for incoming requests.

| ![Alt text](/images/laravel-mvc-components.png?raw=true "MVC Components") |
|:--:|
| *Credits: http://laravelbook.com/laravel-architecture/* |