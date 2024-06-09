# WAPH-Web Application Programming and Hacking

## Instructor: Dr. Phu Phung

## Student: Luqman Al Hasni

**Name**: Luqman Al Hasni

**Email**: alhasnld@mail.uc.edu

![Luqman's headshot](images/luqmanPhoto.jpg)


## Lap overview

In the first individual project, I built a personal website that showcased my skills, projects, and experience. The website should be deployed on github.io and therefore could be accessed via the link at the bottom. There are many requirements to accomplish this project, First, it needs to include a link to another webpage that demonstrates the Web Application and Hacking course overview; additionally, the page should also include links to the labs and projects. I was also required to include CSS framework such as Bootstrap, and page counter. Moreover, I was also required to include jQuery and one more JavaScript library/framework. In addition, I added the following from lab 2, analog clock, digital clock, show/hide email functionality, and one more custom functionality. In addition, three APIs were implemented. Finally, JavaScript cookies were utilized to remember the users. 
Website: https://luqma18n.github.io/index.html

### Part I - General requirements

#### A
In the first task, I was required to deploy the website to github.io as the following: 
Website: https://luqma18n.github.io/index.html
My username in github is luqma18n, and the index page is the landing page for the website. 

![Landing Page Link](images/landingPageLink.png)


#### B

Moreover, the landing page has a link to the waph.html page. The waph.html page contains information about the course, such as requirements and outcomes; in addition, it contains links to my labs (0, 1, 2), hackathon (1), and projects.

```html
<a href="waph.html" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>WAPH Course Overview</span></a>
```

![WAPH Page](images/WAPHPage.png)


### Part 2 - Non-technical requirements

#### A. Bootstrap Theme

The second task, a Bootstrap template was used to build the website theme. The following template was utilized: 


https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/

The template was customized and tailored to fit my target.

![Landing Page](images/landingPage.png)

#### B. Page Counter

Moreover, a page counter was used as the following: 

```html
 <a href="https://info.flagcounter.com/Q9yh"><img
		src="https://s11.flagcounter.com/count2/Q9yh/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/"
		alt="Flag Counter" border="0"></a>
```

![Page Counter](images/pageCounter.png)

The page counter keeps track of the visitors to the website by showing the country and the number of visitors from that country. 


### Part 3 - Technical requirements

#### A. JavaScript

jQuery was implemented because it reduces the code complexity and was utilized to retrieve data from different APIs as the following: 

```html
setInterval(function () {
	$.get("https://v2.jokeapi.dev/joke/Any?type=single",
	function (result) {
		if (result.length == 0) {
		return;
		}
		$("#response").html(result.joke);
	}) 
	}, 60000);
```
The code is going to show a new joke every minute.


![jQuery and joke api](images/jokeAPI.png)

#### B. From Lab 2

In addition to the jQuery, from lab 2 the following was implemented, analog and digital clocks, show/hide email functionality, a function of my choice


![Analog Clock](images/AnalogClock.png)

![Digital Clock](images/DigitalClock.png)

![Show/Hide Email](images/showEmail.png)


#### C. API
Moreover, three APIs where implemented in this project.

##### I. Joke API

The image and code was demonstrated above. 

##### II. Quote API
The following API is going to retrieve a new quote every minute 

```js
// second API: random quote
setInterval(function () {
$.get("https://dummyjson.com/quotes/random",
function (result) {
	if (result.length == 0) {
	return;
	}
	$("#quote").html(result.quote);
	$("#quoteAuthor").html(result.author);
})
}, 60000);

```

![Quote API](images/QuoteAPI.png)

##### II. Google Maps API
The following API is going to show a map for a specific location (in my case the map will show 'University of Cincinnati)

```html
<!-- Google Maps: University of Cincinnati -->
<iframe width="400" height="450" loading="lazy" allowfullscreen=""
referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAjNZ2mWCXlioT3sHR6zsjRLTpzAKWaE2Y
	&amp;q=University+of+Cincinnati,Cincinnati+OH">
</iframe>

```

![Google Maps API](images/GoogleMapsAPI.png)



#### D. Cookies

Finally, cookies were implemented in the project to welcome the user who visits the website for the first time by asking for his name then welcoming the user and prompting the current date. Moreover, if he visits the website again, the cookie will be invoked again, welcoming the user back and prompting the date of the last visit

```js

// setting cookies
if (document.cookie.indexOf("username") < 0) {
	let currentDate = new Date();
	let username = prompt("Please enter your name: ");
	if (username) {
	document.cookie = 'username=' + username;
	document.cookie = 'visitDate=' + currentDate.toString();
	alert("Welcome To My Profile " + username + "! you visited us today on " + currentDate);
	} else {
	document.cookie = 'username=YOURusername' + ';visitDate=' + currentDate;;
	document.cookie = 'visitDate=' + currentDate.toString();
	alert("Welcome To My Profile!");
	}
} else {
	if (!(document.cookie == "username=YOURusername")) {
	let info = document.cookie.split(';');
	let username = info[0].slice(9);  
	let currentDate = info[1].slice(11);
	alert("Welcome Back To My Profile " + username + "! your last visit was on " + currentDate);
	} else {
	let currentDate = document.cookie.slice(32);
	alert("Welcome Back To My Profile! your last visit was on " + currentDate);
	}
}

```

![JavaScript Cookies](images/cookies.png)
