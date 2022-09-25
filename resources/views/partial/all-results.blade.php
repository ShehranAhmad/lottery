
<div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="section-header text-center">
            <h3 class="section-title">{{ $date }}</h3>
            <p class="text-left">Select Prize Draw Date</p>
            <form class="subscribe-form mt-1" id="result-form" method="post" >
                @csrf
                <input type="date" name="date" value="{{$date}}" id="subs_email" placeholder="Select Date">
                <input type="submit" id="search-results" value="Get Draw Results">
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="lottery-winning-num-part">
            <div class="lottery-winning-num-table">
                <h3 class="block-title">lottery winning numbers</h3>
                <div class="lottery-winning-table">
                    <table class="border-table result-table">
                        <thead>
                        <tr class="">
                            <th class="" >Draw Time</th>
                            <th class="" >राजा रानी <br> Raja Rani</th>
                            <th class="" >मेन स्टार<br>Main Star</th>
                            <th class="" >सुपर फ़ास्ट<br>Super Fast</th>
                            <th class="" >चेतक फ़ास्ट<br>Chetak Fast</th>
                            <th class="" >संगम फ़ास्ट<br>Sangam Fast</th>
                            <th class="" >राजश्री स्पेशल<br>Rajshri Special</th>
                            <th class="" >राज रानी<br>Raj Rani</th>
                            <th class="" >गोल्ड<br>Gold</th>
                        </tr>
                        </thead>
                        <tbody class="lottery-result">
                        
                            @if ($lottery_data->count() == 0)
                            <tr>
                                <td colspan="9">No Record Found</td>
                            </tr>
                            @else
                                @foreach($lottery_data as $obj)
                                    <tr>
                                        <td>{{ date('h:i a' , strtotime($obj->time)) }}</td>
                                        <td>{{$obj->raja_rani}}</td>
                                        <td>{{$obj->main_star}}</td>
                                        <td>{{$obj->super_fast}}</td>
                                        <td>{{$obj->chetak_fast}}</td>
                                        <td>{{$obj->sangam_fast}}</td>
                                        <td>{{$obj->rajshri_special}}</td>
                                        <td>{{$obj->raj_rani}}</td>
                                        <td>{{$obj->gold}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
