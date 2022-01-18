<h1>{{__('Section')}} {{$key}}. {{$sectionTitle}}</h1>
<p> </p>
<table>
    <thead>
    <tr>
        <th>{{ __(\Illuminate\Support\Str::ucfirst('question')) }}</th>
        <th>{{ __(\Illuminate\Support\Str::ucfirst('score')) . ' %' }}</th>
        <th>{{ __(\Illuminate\Support\Str::ucfirst('trust')) }}</th>
        <th>{{ __(\Illuminate\Support\Str::ucfirst('impartiality')) }}</th>
        <th>{{ __(\Illuminate\Support\Str::ucfirst('protection')) }}</th>
    </tr>
    </thead>
    <tbody>

        @foreach($report as $rep)
            <tr>
                <td>{{ $rep->block->title }}</td>
                <td style="{{$rep->scores['main']['scores'] > 79 ? 'background-color: #84E36C;': ''}}{{$rep->scores['main']['scores'] >= 60 && $rep->scores['main']['scores'] <= 79 ? 'background-color: #F3BB2A;': ''}}{{$rep->scores['main']['scores'] < 60 ? 'background-color: #EB3333;': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:20px; height: 30px; text-align: center; vertical-align: middle;">
                    @if($rep->scores['main']['scores'] != null)
                        {{ intval($rep->scores['main']['scores']) }}
                    @else
                        0
                    @endif
                </td>
                <td style="{{$rep->scores['main']['trust'] > 79 ? 'background-color: #84E36C;': ''}}{{$rep->scores['main']['trust'] >= 60 && $rep->scores['main']['trust'] <= 79 ? 'background-color: #F3BB2A;': ''}}{{$rep->scores['main']['trust'] < 60 ? 'background-color: #EB3333;': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:20px; height: 30px; text-align: center; vertical-align: middle;">
                    @if($rep->scores['main']['trust'] != null)
                        {{ intval($rep->scores['main']['trust']) }}
                    @else
                        0
                    @endif
                </td>
                <td style="{{$rep->scores['main']['impartiality'] > 79 ? 'background-color: #84E36C;': ''}}{{$rep->scores['main']['impartiality'] >= 60 && $rep->scores['main']['impartiality'] <= 79 ? 'background-color: #F3BB2A;': ''}}{{$rep->scores['main']['impartiality'] < 60 ? 'background-color: #EB3333;': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:20px; height: 30px; text-align: center; vertical-align: middle;">
                    @if($rep->scores['main']['impartiality'] != null)
                        {{ intval($rep->scores['main']['impartiality']) }}
                    @else
                        0
                    @endif
                </td>
                <td style="{{$rep->scores['main']['protection'] > 79 ? 'background-color: #84E36C;': ''}}{{$rep->scores['main']['protection'] >= 60 && $rep->scores['main']['protection'] <= 79 ? 'background-color: #F3BB2A;': ''}}{{$rep->scores['main']['protection'] < 60 ? 'background-color: #EB3333;': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:20px; height: 30px; text-align: center; vertical-align: middle;">
                    @if($rep->scores['main']['protection'] != null)
                        {{ intval($rep->scores['main']['protection']) }}
                    @else
                        0
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
