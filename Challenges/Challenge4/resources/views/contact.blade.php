<h1>Contact</h1>
<a href="{{ url('home') }}">Home</a>
<a href="{{ url('over') }}">Over</a>
<a href="{{ url('werk') }}">Werk</a>
<a href="{{ url('contact') }}">Contact</a>

   <h1>Contact form</h1>
   <div id="contact">
       <form action="/contact/send" method="post">
           @csrf
           <input type="text" name="first_name" id="first_name" placeholder="first name">
           <br>
           <input type="submit" value="submit">
       </form>
   </div>