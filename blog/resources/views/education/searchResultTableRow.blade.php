<tr>
    <td>
        <div class="widget-26-job-emp-img">
        <a href="/teacher/{{$teacher->id}}/show/public"><img src="{{ $teacher->image }}" alt="Company" /></a>
        </div>
    </td>
    <td>
        <div class="widget-26-job-title">
            <a href="/teacher/{{$teacher->id}}/show/public" class="text-primary">{{ $teacher->firstName." ".$teacher->lastName }}</a>
            <p class=" text-muted time">{{ $teacher->email }}</p>
        </div>
    </td>
    <td>
        <div class="widget-26-job-info">
            <p class="type m-0">{{ $teacher->course }}</p>
            <p class="text-muted m-0">in <span class="location">{{ $teacher->city." ".$teacher->country }}</span></p>
        </div>
    </td>
    <td>
        <div class="widget-26-job-salary">${{$teacher->price}}/hr</div>
    </td>
    <td>
        <div class="widget-26-job-category bg-soft-base">
            <i class="indicator bg-base"></i>
            <span>{{ $teacher->subject1.", ".$teacher->subject2.', '.$teacher->subject3}}</span>
        </div>
    </td>
    <td>
        <div class="widget-26-job-starred">
            <a href="#">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="feather feather-star"
                >
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
            </a>
        </div>
    </td>
</tr>