@extends('layouts.app')

@section('content')
<div class="calendar-grid">
    <div class="calendar-header">
        <div>Monday</div>
        <div>Tuesday</div>
        <div>Wednesday</div>
        <div>Thursday</div>
        <div>Friday</div>
        <div>Saturday</div>
        <div>Sunday</div>
    </div>
    <div class="calendar-week">
        <div class="calendar-day day">1</div>
        <div class="calendar-day day">2</div>
        <div class="calendar-day day">3</div>
        <div class="calendar-day booked-day">
        <div class="number">4</div>
        <div class="image">
            <a class="calendar-link" href="/pancakes">
            <img class="pancake-picture" src={{asset('images/pancakes.jpg')}} alt="pancake picture">
            </a>
        </div>
        <div class="food-text">Pancakes</div>
        </div>
        <div class="calendar-day day">5</div>
        <div class="calendar-day day">6</div>
        <div class="calendar-day day">7</div>
    </div>
    <div class="calendar-week">
        <div class="calendar-day day">8</div>
        <div class="calendar-day day">9</div>
        <div class="calendar-day day">10</div>
        <div class="calendar-day day">11</div>
        <div class="calendar-day day">12</div>
        <div class="calendar-day day">13</div>
        <div class="calendar-day day">14</div>
    </div>
    <div class="calendar-week">
        <div class="calendar-day day">15</div>
        <div class="calendar-day day">16</div>
        <div class="calendar-day day">17</div>
        <div class="calendar-day day">18</div>
        <div class="calendar-day day">19</div>
        <div class="calendar-day day">20</div>
        <div class="calendar-day day">21</div>
    </div>
    <div class="calendar-week">
        <div class="calendar-day booked-day">
        <div class="number">22</div>
        <div class="image">
            <a class="calendar-link" href="/meatballs">
            <img class="picture" src={{asset('images/meatballs.jpg')}} alt="Meatballs picture">
            </a>
        </div>
        <div class="food-text">Meatballs</div>
        </div>
        <div class="calendar-day day">23</div>
        <div class="calendar-day day">24</div>
        <div class="calendar-day day">25</div>
        <div class="calendar-day day">26</div>
        <div class="calendar-day day">27</div>
        <div class="calendar-day day">28</div>
    </div>
    <div class="calendar-week last-week">
        <div class="calendar-day day">29</div>
        <div class="calendar-day day">30</div>
        <div class="calendar-day day">31</div>
        <div class="calendar-day day">1</div>
        <div class="calendar-day day">2</div>
        <div class="calendar-day day">3</div>
        <div class="calendar-day day">4</div>
    </div>
</div>
@endsection