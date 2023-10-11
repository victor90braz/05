# Object-Oriented Principles in PHP

This project demonstrates the use of object-oriented principles in PHP, featuring a `Team` class and a `Member` class.

## Table of Contents

- [Introduction](#introduction)
- [Classes](#classes)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This project showcases object-oriented programming principles in PHP, providing implementations of the `Team` and `Member` classes. It illustrates concepts like constructors, static methods, encapsulation, and method abstraction.

## Run a local PHP server in the "constructs" directory:

php -S localhost:8888 -t constructs

## Classes

## GitHub Repository

The project is hosted on GitHub. You can find the repository [here](https://github.com/victor90braz/03-inheritance.git).

### Team Class

The `Team` class represents a sports team and includes the following methods:

- `__construct($name, $members)`: Constructor to initialize the team with a name and an array of members.
- `start(...$params)`: Static factory method to create a new `Team` instance.
- `name()`: Get the name of the team.
- `add($name)`: Add a new member to the team.
- `members()`: Get the array of team members.

### Member Class

The `Member` class represents an individual team member and includes the following methods:

- `__construct($name)`: Constructor to initialize a member with a name.
- `lastViewed()`: Method to get the last viewed information for the member.

## Features

- Implementation of the `Team` class with methods for managing team information.
- Implementation of the `Member` class for representing individual members of the team.

## Installation

1. Clone the repository or download the ZIP file.
2. Install any necessary dependencies using the provided `composer.json` file:
   ```bash
   composer install
   ```

Sure, I'll provide a brief explanation of the code and then create a README explaining the key concepts like interfaces, implementation, etc.

### Code Explanation:

1. **Setting Up Paths and Including Files:**
   The code starts by setting up a `$basePath` and requiring a file named "functions.php" using the concatenated `$basePath`.

2. **Interface Definition:**
   An interface named `NewsLetter` is defined with a single method signature `subscribe($email)`. Interfaces in PHP allow for the declaration of method signatures without implementation details.

3. **Implementing the Interface:**
   Two classes, `CampaignMonitor` and `Drip`, both implement the `NewsLetter` interface. They provide concrete implementations for the `subscribe($email)` method, fulfilling the requirements specified by the `NewsLetter` interface.

4. **Controller and Subscription Handling:**
   The `NewsLetterSubscriptionsController` class defines a method `store` that accepts an instance of a class implementing the `NewsLetter` interface. It then calls the `subscribe` method on the provided instance with a predefined email.

5. **Usage:**
   Finally, an instance of `NewsLetterSubscriptionsController` is created, and the `store` method is invoked with an instance of `CampaignMonitor`.

### README:

## Understanding the PHP Code

This PHP code demonstrates the usage of interfaces and class implementation in object-oriented programming. Here's a breakdown of the key concepts:

### 1. Interfaces:

An interface in PHP defines a contract, specifying method signatures without implementing their functionality. Classes implementing an interface must provide concrete implementations for all the methods defined in the interface. In this code, `NewsLetter` is an interface that requires implementing a `subscribe($email)` method.

### 2. Implementing an Interface:

Classes `CampaignMonitor` and `Drip` both implement the `NewsLetter` interface by providing the required `subscribe($email)` method. This allows these classes to adhere to the contract defined by the `NewsLetter` interface.

### 3. Class Implementation and Usage:

- `CampaignMonitor` and `Drip` classes are examples of implementing the `NewsLetter` interface. They define the specific behavior for subscribing a user using CampaignMonitor and Drip, respectively.

- The `NewsLetterSubscriptionsController` class contains a method `store` that accepts an instance of a class implementing the `NewsLetter` interface. Inside this method, the `subscribe` method of the provided instance is called, allowing for subscription handling based on the specific implementation of the `NewsLetter` interface.

### 4. Usage Example:

In the usage example provided in the code, an instance of `CampaignMonitor` is created and passed to the `store` method of `NewsLetterSubscriptionsController`. This demonstrates how the `NewsLetterSubscriptionsController` can work with different implementations of the `NewsLetter` interface, such as `CampaignMonitor` and `Drip`, through the common contract defined by the interface.

Feel free to reach out if you have any further questions or need additional clarification!
