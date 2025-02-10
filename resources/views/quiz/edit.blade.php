<x-app-layout>


    <x-dashboard-layout>

        <form class="text-left grid grid-cols-1 gap-4 my-5" method="post"
            action="{{route('quizzes.update',["quiz"=>$quiz->id])}}">
            @method('PUT')
            @csrf
            <span class="grid  grid-cols-[80%] sm:grid-cols-[20%_40%]    ">
                <label for="question">
                    Question
                </label>

                <span class="flex flex-col"><textarea rows="2" class=" rounded-lg" id="question" name="question"
                        type="text">{{str($quiz->question)}}</textarea>

                    @if($errors->has('question'))
                    <span class=" text-red-500">{{$errors->first('question')}}

                    </span>
                    @endif
                </span>

            </span>


            @foreach (json_decode($quiz->choices) as $key=>$value )
         

            <span class="grid  grid-cols-[80%] sm:grid-cols-[20%_40%]    ">
                <label
                    for={{"answer_".strtolower($key)}}>

                    {{"Answer ".$key}}
                </label>
                <span class="flex flex-col">
                    <textarea rows="2" class=" text-start rounded-lg"
                        id={{"answer_".strtolower($key)}}
                        name="{{"answer_".strtolower($key)}}"
                        type="text">{{str($value)}}</textarea>

                    @if($errors->has("answer_".strtolower($key)))
                    <span class=" text-red-500">

                        {{$errors->first("answer_".strtolower($key) )}}

                    </span>
                    @endif
                </span>
            </span>

            @endforeach






            <span class="grid  grid-cols-[80%] sm:grid-cols-[20%_40%]    ">
                <label for="correct_answer">
                    Correct Answer
                </label>
                <select class="rounded-lg" name="correct_answer">

                    @foreach (json_decode($quiz->choices) as $key=>$value )

                    <option 
                    value="{{$key}}" 
                    @selected($quiz->answer==$key)
                   >{{$key}}</option>

                    
                    @endforeach
                </select>

                @if($errors->has('correct_answer'))
                <span class=" text-red-500">{{$errors->first('correct_answer')}}</span>
                @endif
            </span>
            @php

            @endphp



            <span class="grid  grid-cols-[80%] sm:grid-cols-[20%_40%]  ">
                <label></label>
                <input type="submit" class="cursor-pointer p-3 w-[20%] rounded-lg bg-black
                 text-white  dark:bg-white dark:text-white" value="Save" />

                @if(session('success'))
  
                <p class="text-green-400">{{session('success')}}</p>

                @endif
            </span>

        </form>


    </x-dashboard-layout>



</x-app-layout>