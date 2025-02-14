<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->

    <link rel="stylesheet" href="{{ asset('web/styles/sidebar.css')}}">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="{{ asset('web/assets/logo2.png')}}">
    <title>GuidanceHub|HOME</title>
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            /* Light background color */
        }

        .container {
 
            /* background-image: url('https://images.pexels.com/photos/247899/pexels-photo-247899.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); */
            /* Replace with the actual path to your background image */
            background-size: cover;
           
            background-position: center;
            color: #000;
            padding: 20px;
            animation: fadeIn 3s ease-in-out;
            height: 100vh;
            /* Apply a slower fade-in animation to the container */
        }

        .welcome-container,
        .users-container {
            margin-top: 20px;
            text-align: center;

            /* Center-align the content */
        }

        .user-box-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            /* Adjust as needed */
        }

        .user-box {
            width: calc(20% - 20px);
            box-sizing: border-box;
            padding: 20px;
            opacity: 0;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: colorChange 5s infinite;
            animation: fadeInUserBox 1s forwards;
            animation: fadeIn 3s ease-in-out;
        }


        @keyframes fadeInUserBox {
            to {
                opacity: 1;
            }
        }

        .user-box img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 20px;
            margin-bottom: 10px;
        }

        .user-box h2,
        .user-box p {
            color: #333;
        }

        .user-box:nth-child(1) {
            background-color: #3498db;
        }

        .user-box:nth-child(2) {
            background-color: #52e0c6;
        }

        .user-box:nth-child(3) {
            background-color: #6cacc2;
        }

        .user-box:nth-child(4) {
            background-color: #8a4b8d;
        }

        .user-box:nth-child(5) {
            background-color: #a03e80;
        }

        .user-box:nth-child(1) {
            animation-delay: 0.2s;
        }

        .user-box:nth-child(2) {
            animation-delay: 0.4s;
        }

        .user-box:nth-child(3) {
            animation-delay: 0.6s;
        }

        .user-box:nth-child(4) {
            animation-delay: 0.8s;
        }

        .user-box:nth-child(5) {
            animation-delay: 1s;
        }

        .welcome-container h2 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #3498db;
            animation: slideInTitle 3s ease-in-out;
            font-family: 'Roboto', sans-serif;
        }

        .welcome-container p {
            font-size: 16px;
            margin-bottom: 20px;
            color: black;
            animation: slideInContent 3s ease-in-out 1s;
        }

        /* Button styles */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
            /* Add a smooth transition effect */
        }

        .btn:hover {
            cursor: pointer;
        }

        .btn-profile {
            color: #fff;
            /* White text color */
            text-decoration: none;
            background-color: #e74c3c;
            /* Red button color for Profile Link */
        }

        .btn-book-meeting {
            color: #fff;
            /* White text color */
            text-decoration: none;
            background-color: #2ecc71;
            /* Green button color for Book Meeting */
        }

        .btn-book-meeting:hover {
            background-color: lime;
            color: white;
        }

        .btn:hover {
            filter: brightness(90%);
            /* Darken the button on hover */
        }

        /* Additional styling for the meeting input field */
        .form-group {
            margin-top: 10px;
            /* Top margin */
            margin-bottom: 10px;
            /* Bottom margin */
        }

        /* Keyframes for color change animation */
        @keyframes colorChange {
            0% {
                border-color: #3498db;
                /* Initial color */
            }

            50% {
                border-color: #e74c3c;
                /* Midpoint color */
            }

            100% {
                border-color: #2ecc71;
                /* Final color */
            }
        }

        @keyframes colorChangeText {
            0% {
                color: red;
            }

            25% {
                color: blue;
            }

            50% {
                color: green;
            }

            75% {
                color: orange;
            }

            100% {
                color: red;
            }
        }

        @keyframes fadeEffect {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }

        @keyframes slideInTitle {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInContent {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('web/assets/logo2.png')}}" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">GuidanceHub</span>
                    <span class="profession">User</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box" style="display: none;">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link" style="background-color: #2B68DD; border-radius: 5px;">
                        <a href="{{ route('user.interest.index') }}">
                            <i class='bx bx-home-alt icon' style="color: white;"></i>
                            <span class="text nav-text" style="color: white;">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('user.skills.index') }}">
                            <i class='bx bx-search icon'></i>
                            <span class="text nav-text">Find Expert</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('user.meetings') }}">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">My Booking</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('chatify') }}" target="_blank">
                            <i class='bx bx-conversation bx-rotate-90-alt icon'></i>
                            <span class="text nav-text">Messages</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('file-list.index') }}">
                            <i class='bx bx-file-find bx-rotate-90-alt icon'></i>
                            <span class="text nav-text">Resources</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('feedback.create') }}">
                            <i class='bx bx-comment-edit bx-rotate-90-alt icon'></i>
                            <span class="text nav-text">Request Source</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="/user/announcements">
                            <i class='bx bx-notification bx-rotate-90-alt icon'></i>
                            <span class="text nav-text">Announcements</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('user.details') }}">

                            <i class='bx bx-user-circle bx-rotate-90-alt icon'></i>
                            <span class="text nav-text">My Profile</span>
                        </a>
                    </li>

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="{{ route('logout') }}" id="logout-link">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>

                    <script>
                        document.getElementById('logout-link').addEventListener('click', function(event) {
                            event.preventDefault(); // Prevent the default link behavior

                            // Assuming you have a hidden form with the ID 'logout-form'
                            document.getElementById('logout-form').submit();
                        });
                    </script>

                    <!-- Include the CSRF token in a hidden form -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>

                <!-- <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li> -->

            </div>
        </div>

    </nav>

    <section class="home">
        <div class="container">
            <div class="welcome-container">
                <h2 style="color:#2B68DD">Welcome Back, {{ $loggedInUser->name }}!</h2><br>
                <p> Welcome to GuidanceHub! We are on a mission to empower and foster growth. Our platform goes beyond conventional learning, connecting individuals with seasoned creators for personalized guidance in career development, skill enhancement, and exam preparation. Engage in 1:1 mentoring, explore tailored roadmaps, and benefit from expert-led skill enhancement. GuidanceHub is your dedicated partner in unlocking unique potential. Join our community and embark on a journey to personalized excellence.</p><br>
                <h2 style="color:#2B68DD">Top Creators Profile Based on Your Intrests</h2><br>
            </div>



            <div class="users-container">
                <div class="user-box-container">
                    @forelse($users as $index => $user)
                    <div class="user-box" style="animation: fadeInUserBox 1s forwards, colorChangeText 5s infinite,slideInContent 3s ease-in-out 1s;">
                        <!-- <img src="{{ asset('storage/'.$user->profile_photo_path) }}" alt="{{ $user->name }}"> -->
                        <h2>{{ $user->name }}</h2>
                        <p>Occupation: {{ $user->occupation }}</p>
                        <p>Experience: {{ $user->exp }}</p>
                        <p>Skills:{{ $user->skill }}</p>
                        <div>
                            <a href="{{ $user->link }}" target="_blank" class="btn btn-profile">View Profile</a>
                            <form method="post" action="{{ route('user.bookMeeting', $user->id) }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label"></label>
                                    <input type="datetime-local" class="form-control" id="meeting_datetime_{{ $index }}" name="meeting_datetime" required>
                                </div>
                                <button type="submit" class="btn btn-book-meeting">Book Meeting</button>
                            </form>
                        </div>
                    </div>
                    @empty
                    <p>No users found with similar skills.</p>
                    @endforelse
                </div>
            </div>
        </div>



        <script>
            // Get the current date and time in ISO format
            var now = new Date();
            var year = now.getFullYear();
            var month = (now.getMonth() + 1).toString().padStart(2, '0');
            var day = now.getDate().toString().padStart(2, '0');
            var hours = now.getHours().toString().padStart(2, '0');
            var minutes = now.getMinutes().toString().padStart(2, '0');
            var currentDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;

            // Set the min attribute of the input to the current date and time
            document.getElementById('meeting_datetime').min = currentDateTime;
        </script>

    </section>

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        searchBtn.addEventListener("click", () => {
            sidebar.classList.remove("close");
        })

        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>

</body>

</html>