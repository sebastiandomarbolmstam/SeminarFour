<template>
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="navbar-container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" :class="{active:title === 'Home'}" 
                        href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" :class="{active:title === 'Swedish Meatballs'}" 
                        href="/meatballs">Swedish Meatballs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" :class="{active:title === 'American Pancakes'}" 
                        href="/pancakes">American Pancakes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" :class="{active:title === 'Calendar'}" 
                        href="/calendar">Calendar</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="login">Login</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="register">Register</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            { user } <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <!--<a class="dropdown-item" href="logout"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            
                            <form id="logout-form" action="logout" method="POST">
                                @csrf
                            </form>-->
                            <logout></logout>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
</template>

<script>
export default {
    props: ['title'],
    data() {
        user:'bengt'
    }
}
</script>



