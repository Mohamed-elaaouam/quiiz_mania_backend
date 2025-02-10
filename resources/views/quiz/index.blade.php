<x-app-layout>


    <x-dashboard-layout>
        <div class="p-5">
            <span> <a class="p-2 mt-5   rounded-lg  bg-black  text-white dark:bg-white "
                    href="{{route('quizzes.create')}}"> Create Question</a>
                @if(session('success'))
                <p class="text-green-400">{{session('success')}}</p>
                @endif
            </span>
            <table class="dark:text-white">
                <tr>
                    <th>
                        question
                    </th>


                    <th>
                        Actions
                    </th>
                </tr>
                @foreach ($quizzes as $quiz )
                <tr>
                    <td>
                        {{$quiz->question}}
                    </td>
                    <td class="flex gap-3 ">

                        <a href="{{route('quizzes.edit',["quiz"=>$quiz->id])}}">Edit</a>

                        <form
                            method="post"
                            onsubmit="return confirm('this Question will be deleted,Continue?')"
                            action="{{route('quizzes.destroy',["quiz"=>$quiz->id])}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>

    </x-dashboard-layout>



</x-app-layout>