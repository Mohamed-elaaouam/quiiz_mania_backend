
   
    <div class=" grid gap-10 grid-cols-[200px_1fr]  w-full">
   <div class="relative  ">
   <aside class="overflow-hidden rounded-lg mt-5  fixed    flex flex-col bg-white h-[85vh] w-[200px]   ">
<ul class=" p-5">
    <li><a href="{{route(name: "dashboard")}}">Dashboard</a></li>
    <li><a href="{{route(name: "users.index")}}">Users</a></li>
    <li><a href="{{route("quizzes.index")}}">Questions</a></li>
    <li><a href="{{route("users.index")}}">Admins</a></li>
    <li><a href="{{route("users.index")}}">Notifications</a></li>


    <li><a href="#">Settings</a></li>

</ul>

</aside>
   </div>
      
 {{$slot}}
    </div>
