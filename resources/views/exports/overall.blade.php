<h1>{{ __('Overall Section Summary') }}</h1>
<p> </p>
<table>
    <thead>
    <tr>
        <th>{{ __(\Illuminate\Support\Str::ucfirst('Section')) }}</th>
        <th>{{ __(\Illuminate\Support\Str::ucfirst('score')) . ' %' }}</th>
        <th>{{ __(\Illuminate\Support\Str::ucfirst('trust')) }}</th>
        <th>{{ __(\Illuminate\Support\Str::ucfirst('impartiality')) }}</th>
        <th>{{ __(\Illuminate\Support\Str::ucfirst('protection')) }}</th>
    </tr>
    </thead>
    <tbody>

    @foreach($overalls as $key => $rep)
        <tr>
            <td>{{ $key }}</td>
            <td style="{{$rep['score'] > 79 ? 'background-color: #84E36C;': ''}}{{$rep['score'] >= 60 && $rep['score'] <= 79 ? 'background-color: #F3BB2A;': ''}}{{$rep['score'] < 60 ? 'background-color: #EB3333;': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:20px; height: 30px; text-align: center; vertical-align: middle;">
                @if($rep['score'] != null)
                    {{ intval($rep['score']) }}
                @else
                    0
                @endif
            </td>
            <td style="{{$rep['trust'] > 79 ? 'background-color: #84E36C;': ''}}{{$rep['trust'] >= 60 && $rep['trust'] <= 79 ? 'background-color: #F3BB2A;': ''}}{{$rep['trust'] < 60 ? 'background-color: #EB3333;': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:20px; height: 30px; text-align: center; vertical-align: middle;">
                @if($rep['trust'] != null)
                    {{ intval($rep['trust']) }}
                @else
                    0
                @endif
            </td>
            <td style="{{$rep['impartiality'] > 79 ? 'background-color: #84E36C;': ''}}{{$rep['impartiality'] >= 60 && $rep['impartiality'] <= 79 ? 'background-color: #F3BB2A;': ''}}{{$rep['impartiality'] < 60 ? 'background-color: #EB3333;': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:20px; height: 30px; text-align: center; vertical-align: middle;">
                @if($rep['impartiality'] != null)
                    {{ intval($rep['impartiality']) }}
                @else
                    0
                @endif
            </td>
            <td style="{{$rep['protection'] > 79 ? 'background-color: #84E36C;': ''}}{{$rep['protection'] >= 60 && $rep['protection'] <= 79 ? 'background-color: #F3BB2A;': ''}}{{$rep['protection'] < 60 ? 'background-color: #EB3333;': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:20px; height: 30px; text-align: center; vertical-align: middle;">
                @if($rep['protection'] != null)
                    {{ intval($rep['protection']) }}
                @else
                    0
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
