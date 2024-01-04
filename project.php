<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
</head>
<style>
    /* ... Your existing styles ... */

    /* Style for the tooltip image */
    #tooltip-image {
        display: none;
        position: absolute;
        max-width: 150px; /* Adjust the maximum width as needed */
        z-index: 1000; /* Set a high z-index to ensure it appears on top */
    }
</style>
<body>
<!-- Add this script to your body section -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all navbar links
        const navLinks = document.querySelectorAll('nav#navbar a');

        // Create an image element for the tooltip
        const tooltipImage = document.createElement('img');
        tooltipImage.id = 'tooltip-image';
        document.body.appendChild(tooltipImage);

        // Add event listeners to each navbar link
        navLinks.forEach(function (link) {
            link.addEventListener('mouseover', function (event) {
                const imageSrc = getImageSrc(link); // Get image source based on the link
                const mouseX = event.clientX;
                const mouseY = event.clientY;

                // Set the tooltip image source and position
                tooltipImage.src = imageSrc;
                tooltipImage.style.left = mouseX + 'px';
                tooltipImage.style.top = mouseY + 'px';
                tooltipImage.style.display = 'block';
            });

            link.addEventListener('mouseout', function () {
                // Hide the tooltip image when the mouse leaves the link
                tooltipImage.style.display = 'none';
            });
        });

        // Function to get image source based on the link
        function getImageSrc(link) {
            // Add logic to determine the image source based on the link
            switch (link.getAttribute('href')) {
                case '#Intro':
                    return 'https://beecrowd.io/wp-content/uploads/2023/01/Post-1_2-BKG.jpg'; // Replace with the correct path for "What is C++"
                case '#Object':
                    return 'https://miro.medium.com/v2/resize:fit:1400/1*CM0Jy_kA06FwPx0O432RxA.png'; // Replace with the correct path for "Objects and Classes"
                case '#Inheritance':
					return 'https://miro.medium.com/v2/resize:fit:696/1*aQgkqBjI1sMjSose-_S5CA.jpeg';
				case '#Polymorphism':
					return 'https://cdn.educba.com/academy/wp-content/uploads/2019/04/What-is-Polymorphism.jpg';
                default:
                    return 'https://scaler.com/topics/images/object-oriented-programming-concepts-1024x870.jpg'; // Replace with a default image path
            }
        }
    });
</script>

	<div class="main-body">
		<nav id="navbar">
			<header>Documentation Menu</header>
			<a href="#Intro" class="nav-link">
				What is C++</a>
			<a href="#Object" class="nav-link">
				Objects and Classes</a>
			<a href="#Inheritance" class="nav-link">
				Inheritance</a>
			<a href="#Polymorphism" class="nav-link">
				Polymorphism</a>
			<a href="#Abstraction" class="nav-link">
				Abstraction</a>
			<a href="#Encapsulation" class="nav-link">
				Encapsulation</a>
		</nav>

		<main id="main-doc">
			<?php
				// Read content from cpp_info.txt
				$cppInfoContent = file_get_contents("cpp_info.txt");

				// Echo the content within the HTML structure
				echo "<section class='main-section' id='Intro'>
						<header>What is C++?</header>
						<p>$cppInfoContent</p>
					</section>";
			?>
				<code>
					#include<iostream> 
					<br>
					using namespace std; 
					<br>
					int main() 
					<br>
						{ 
							<br>
							cout〈〈"Hello World"; 
							<br>
							return 0; 
							<br>
						} 
				</code>
				<br>
				<p>C++ is an Object Oriented Programming Language.
					<br> The main pillars of Object Oriented
					Programming are :
				</p>
				<ul>
					<li>Objects and Classes</li>
					<li>Inheritance</li>
					<li>Polymorphism</li>
					<li>Abstraction</li>
					<li>Encapsulation</li>
				</ul>
			</section>

			<section class="main-section" id="Object">
				<?php
				// Read content from cpp_info.txt
				$objectsInfoContent = file_get_contents("objects_info.txt");

				// Echo the content within the HTML structure
				echo "<section class='main-section' id='Intro'>
						<header>Objects and classes</header>
						<p>$objectsInfoContent</p>
					</section>";
			?>
				<p><b>Object : </b>An Object is an identifiable
					entity with some characteristics and behavior.
					An Object is an instance of a Class. When a
					class is defined, no memory is allocated but
					when it is instantiated (i.e. an
					object is created) memory is allocated.
					<br>
					<b>Class : </b>The building block of C++ that
					leads to Object-Oriented programming is a Class.
					It is a user-defined data type, which holds its
					own data members and member functions, which can
					be accessed & used by creating an instance
					of that class. A class is like a blueprint for
					an object. For Example: Consider the Class
					of Cars. There may be many cars with different
					names and brand but all of them will share
					some common properties like all of them will
					have 4 wheels, Speed Limit, Mileage range etc.
					So here, Car is the class and wheels,
					speed limits, mileage are their properties.
				</p>
			</section>

			<section class="main-section" id="Inheritance">
				<header>
					Inheritance
				</header>
				<p>
					The capability of a class to derive
					properties and characteristics from
					another class is called Inheritance.
					Inheritance is one of the most important
					feature of Object Oriented Programming.
					Sub Class: The class that inherits
					properties from another class
					is called Sub class or Derived Class.
					Super Class: The class whose properties
					are inherited by sub class is called Base
					Class or Super class. Using inheritance, we
					have to write the functions only one time
					instead of three times as we
					have inherited rest of the three classes
					from base class(Vehicle).
				</p>
				<p> 
					<b>Mode of Inheritance : </b><br><br>

					<b>Public Mode : </b>If we derive a sub
					class from a public base class. Then the
					public member of the base class will
					become public in the derived class and
					protected members of the base class
					will become protected in derived class.
					<br><br>
					<b>Protected Mode : </b>If we derive a
					sub class from a Protected base class.
					Then both public member and protected
					members of the base class will become
					protected in derived class.
					<br><br>
					<b>Private Mode : </b>If we derive a
					sub class from a Private base class.
					Then both public member and protected
					members of the base class will become
					Private in derived class.
					<br><br>
					<b>Types of Inheritance in C++ : </b>
					<br><br><br>
					<b>Single Inheritance :</b> In single
					inheritance, a class is allowed to inherit
					from only one class. i.e. one sub class
					is inherited by one base class only.
					<br><br>
					<b>Multiple Inheritance :</b> Multiple
					Inheritance is a feature of C++ where a
					class can inherit from more than one
					classes. i.e one sub class is inherited
					from more than one base classes.
					<br><br>
					<b>Multilevel Inheritance :</b> In this
					type of inheritance, a derived class is
					created from another derived class.
					<br><br>
					<b>Hieratical Inheritance :</b> In this
					type of inheritance, more than one sub
					class is inherited from a single base
					class i.e. more than one derived class
					is created from a single base class.
					<br><br>
					<b>Hybrid (Virtual) Inheritance :</b>
					Hybrid Inheritance is implemented by
					combining more than one type of
					inheritance.
					For example: Combining Hierarchical
					inheritance and Multiple Inheritance.
				</p>
			</section>

			<section class="main-section" id="Polymorphism">
				<header>
					Polymorphism
				</header>
				<p>
					The word polymorphism means having many
					forms. In simple words, we can define
					polymorphism as the ability of a message
					to be displayed in more than one form.
					A real-life example of polymorphism, a
					person at the same time can have
					different characteristics.
					Like a man at the same time is a father,
					a husband, an employee. So the same
					person posses different behavior in
					different situations. This is called
					polymorphism. Polymorphism is considered
					as one of the important features of Object
					Oriented Programming.
					<br>
					<b>In C++ polymorphism is mainly
						divided into two types:</b>
					<br> 1. Compile time Polymorphism<br>
					2. Runtime Polymorphism
				</p>

				<p>Compile time polymorphism: This type of
					polymorphism is achieved by function
					overloading or operator overloading.
					<br> Runtime polymorphism: This type
					of polymorphism is achieved by
					Function Overriding.
				</p>
			</section>

			<section class="main-section" id="Abstraction">
				<header>
					Abstraction
				</header>

				<p>
					Data abstraction is one of the most
					essential and important feature of object
					oriented programming in C++. Abstraction
					means displaying only essential information
					and hiding the details. Data abstraction
					refers to providing only essential information
					about the data to the outside world,
					hiding the background details or implementation.
					<br> Consider a real life example of a man driving
					a car. The man only knows that pressing the
					accelerators will increase the speed of car
					or applying brakes will stop the car but he
					does not know about how on pressing accelerator
					the speed is actually increasing, he does
					not know about the inner mechanism of the car
					or the implementation of accelerator, brakes
					etc in the car. This is what abstraction is.
				</p>

				<p>
					<b>Abstraction using Classes:</b> We can
					implement Abstraction in C++ using classes.
					Class helps us to group data members and member
					functions using available access specifiers. A
					Class can decide which data member will be
					visible to outside
					world and which is not.
					<br>
					<b>Abstraction in Header files:</b> One
					more type of abstraction in C++ can be
					header files. For example, consider the
					pow() method present in math.h header file.
					Whenever we need to calculate power of a
					number, we simply call the
					function pow() present in the math.h header
					file and pass the numbers as arguments
					without knowing the underlying algorithm
					according to which the function is actually
					calculating power of numbers.
					<br><br><b>Advantages of Data Abstraction:

					</b><br> 1. Helps the user to avoid writing
					the low level code.<br> 2. Avoids code
					duplication and increases reusability.<br>
					3. Can change internal implementation of
					class independently without
					affecting the user.<br> 4. Helps to
					increase security of an application or program
					as only important details are
					provided to the user.
				</p>
			</section>

			<section class="main-section" id="Encapsulation">
				<header>
					Encapsulation
				</header>
				<p>
					In normal terms Encapsulation is defined
					as wrapping up of data and information
					under a single unit. In Object Oriented
					Programming, Encapsulation is defined as
					binding together the data and the functions
					that manipulates them. Consider
					a real life example
					of encapsulation, in a company there are
					different sections like the accounts section,
					finance section, sales section etc. The finance
					section handles all the financial transactions
					and keep records of all the data related to
					finance.
					Similarly the sales section handles all the
					sales related activities and keep records of
					all the sales. Now there may arise a situation
					when for some reason an official from finance
					section needs all the data about sales in a
					particular
					month. In this case, he is not allowed to
					directly access the data of sales section.
					He will first have to contact some other
					officer in the sales section and then
					request him to
					give the particular data. This is what
					encapsulation is. Here the data of
					sales section and the
					employees that can manipulate them are
					wrapped under a single name “sales section”.
				</p>

				<p>
					Encapsulation also lead to data abstraction
					or hiding. As using encapsulation also hides
					the data. In the above example the data of
					any of the section like sales, finance or
					accounts is hidden from any other section.<br>
					In C++ encapsulation
					can be implemented using Class
					and access modifiers.
				</p>
			</section>
		</main>
	</div>
</body>
</html>
