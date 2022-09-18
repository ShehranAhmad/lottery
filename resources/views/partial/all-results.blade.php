
<div class="row justify-content-center">
    <div class="col-lg-7">
        <div class="section-header text-center">
            <h3 class="section-title">12-09-2022</h3>
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
                        <tr class="">
                            <td class="" >09:00 am</td>
                            <td class="" >72</td>
                            <td class="" >88</td>
                            <td class="" >66</td>
                            <td class="" >98</td>
                            <td class="" >22</td>
                            <td class="" >63</td>
                            <td class="" >95</td>
                            <td class="" >18</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
