<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <style type="text/css" media="all">
        .page-break {
            page-break-after: always;
        }
        .page-inside {
            page-break-inside: avoid !important;
        }

        .lg-text {
            font-size: 24px;
            line-height: 24px;
            color: #000000;
        }

        .regular-text {
            font-size: 14px;
            color: #000000;
        }

        .page {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<div class="page-break" style="padding: 25px 0px; min-height: 100vh;">
    {{--@dd($reports)--}}
    <div>
    <div>
        <div style="width:100%;">
            <p class="lg-text" style="color: #1B3C5D;margin-bottom: 8px; font-weight: bold;">
                {{ __('Overall Section Summary') }}
            </p>

            <div style="position: relative; width: 100%; border-bottom: 1px solid #000000; margin-top: 8px;">
                <div style="width:50%;">
                    <p style="margin-bottom: 4px;">
                        {{ __('Section') }}
                    </p>
                </div>
                <div style="position: absolute; top:0%; left:50%; width:12.5%;">
                    <p style="margin-bottom: 4px;">
                        {{ __('Score') }} (%)
                    </p>
                </div>
                <div style="position: absolute; width: 12.5%; left: 62.5%; top:0%;">
                    <p style="margin-bottom: 4px;">
                        {{ __('Trust') }}
                    </p>
                </div>
                <div style="position: absolute; width: 12.5%; left: 75%; top:0%;">
                    <p style="margin-bottom: 4px;">
                        {{ __('Impartiality') }}
                    </p>
                </div>
                <div style="position: absolute; width: 12.5%; left: 87.5%; top:0%;">
                    <p style="margin-bottom: 4px;">
                        {{ __('Protection') }}
                    </p>
                </div>
            </div>
            @foreach($overalls as $key => $rep)
                <div style="position: relative; width: 100%; margin-top: 26px;">
                    <div style="width: 50%;">
                        <p class="regular-text" style="margin-bottom: 8px; font-weight: bold;">
                            {{$key}}
                        </p>
                    </div>
                    <div style="position: absolute; top:0%; left:50%; width:12.5%;">
                        @if($rep['score'] != null || $rep['score'] != 0)
                            <div style="{{$rep['score'] > 79 ? 'background-color: #84E36C;': ''}}{{$rep['score'] >= 60 && $rep['score'] <= 79 ? 'background-color: #F3BB2A;': ''}}{{$rep['score'] < 60 ? 'background-color: #EB3333;': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                <p>{{intval($rep['score'])}}</p>
                            </div>
                        @else
                            <div style="background: #cbd5e0!important; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                            </div>
                        @endif
                    </div>
                    <div style="position: absolute; top:0%; left:62.5%; width:12.5%;">
                        @if($rep['trust'] != null || $rep['trust'] != 0)
                            <div style="{{$rep['trust'] > 79 ? 'background-color: rgba(132, 227, 108, 1);': ''}}{{$rep['trust'] >= 60 && $rep['trust'] <= 79 ? 'background-color: rgba(243, 187, 42, 1);': ''}}{{$rep['trust'] < 60 ? 'background-color: rgba(235, 51, 51, 1);': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                <p>{{intval($rep['trust'])}}</p>
                            </div>
                        @else
                            <div style=" background-color: #cbd5e0; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                            </div>
                        @endif
                    </div>
                    <div style="position: absolute; top:0%; left:75%; width:12.5%;">
                        @if($rep['impartiality'] != null  || $rep['impartiality'] != 0)
                            <div style="{{$rep['impartiality'] > 79 ? 'background-color: rgba(132, 227, 108, 1);': ''}}{{$rep['impartiality'] >= 60 && $rep['impartiality'] <= 79 ? 'background-color: rgba(243, 187, 42, 1);': ''}}{{$rep['impartiality'] < 60 ? 'background-color: rgba(235, 51, 51, 1);': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                <p>{{intval($rep['impartiality'])}}</p>
                            </div>
                        @else
                            <div style="background-color: #cbd5e0; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                            </div>
                        @endif
                    </div>
                    <div style="position: absolute; top:0%; left:87.5%; width:12.5%;">
                        @if($rep['protection'] != null  || $rep['protection'] != 0)
                            <div style="{{$rep['protection'] > 79 ? 'background-color: rgba(132, 227, 108, 1);': ''}}{{$rep['protection'] >= 60 && $rep['protection'] <= 79 ? 'background-color: rgba(243, 187, 42, 1);': ''}}{{$rep['protection'] < 60 ? 'background-color: rgba(235, 51, 51, 1);': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                <p>{{intval($rep['protection'])}}</p>
                            </div>
                        @else
                            <div style=" background-color: #cbd5e0; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class=" page-inside" style="margin-top: 50px;">
        @foreach($overalls as $key => $overall)
            <div style="position: relative;">
                <div style="height:40px; width:33%; position: absolute; top:0%; left:0%; padding: 16px 0px; border-right: 2px solid rgba(0,0,0,0.51); letter-spacing: -0.05em;">
                    {{$key}}
                </div>
                <div style="width: 67%; height:40px; position: relative; left: 33%; top:0%;">
                    <div style=" position:absolute; left:0px; top:0px; width: 100%;">
                        <div style="position: relative; width: 100%;">
                            <div
                                    style="margin-top: 8px; height:24px; border: 1px solid rgba(0,0,0,0.2); width: {{intval($overall['score'])}}%; {{$overall['score'] > 79 ? 'background-color: rgba(132, 227, 108, 1);': ''}}{{$overall['score'] >= 60 && $overall['score'] <= 79 ? 'background-color: rgba(243, 187, 42, 1);': ''}}{{$overall['score'] < 60 ? 'background-color: rgba(235, 51, 51, 1);': ''}}">
                                <span style="margin-left: 12px;">{{ $overall['score'] != 0 ? intval($overall['score']) :  $overall['score']}}%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
</div>

<div class="page-break" style="padding: 25px 0px; min-height: 100vh;">
    {{--@dd($reports)--}}
    <div>
        <div class=" page-break" style="min-height: 100%;">
            <div style="width:100%;">
                <p class="lg-text" style="color: #1B3C5D;margin-bottom: 8px; font-weight: bold;">
                    {{ __('Overall TIP Scoring by Chapter') }}
                </p>

                <div style="position: relative; width: 100%; border-bottom: 1px solid #000000; margin-top: 8px;">
                    <div style="width:50%;">
                        <p style="margin-bottom: 4px;">
                           {{ __('Chapter') }}
                        </p>
                    </div>
                    <div style="position: absolute; top:0%; left:50%; width:12.5%;">
                        <p style="margin-bottom: 4px;">
                            {{ __('Score') }} (%)
                        </p>
                    </div>
                    <div style="position: absolute; width: 12.5%; left: 62.5%; top:0%;">
                        <p style="margin-bottom: 4px;">
                            {{ __('Trust') }}
                        </p>
                    </div>
                    <div style="position: absolute; width: 12.5%; left: 75%; top:0%;">
                        <p style="margin-bottom: 4px;">
                           {{ __('Impartiality') }}
                        </p>
                    </div>
                    <div style="position: absolute; width: 12.5%; left: 87.5%; top:0%;">
                        <p style="margin-bottom: 4px;">
                            {{ __('Protection') }}
                        </p>
                    </div>
                </div>
                @foreach($chapters as $key => $rep)
                    <div style="position: relative; width: 100%; margin-top: 26px;">
                        <div style="width: 50%;">
                            <p class="regular-text" style="margin-bottom: 8px; font-weight: bold;">
                                {{$key == 'oc' ? __('Organisational Context') : ''}}
                                {{$key == 'ls' ? __('Leadership') : ''}}
                                {{$key == 'pl' ? __('Planning') : ''}}
                                {{$key == 'sp' ? __('Support') : ''}}
                                {{$key == 'op' ? __('Operations') : ''}}
                                {{$key == 'pe' ? __('Performance Evalutions') : ''}}
                                {{$key == 'ci' ? __('Continual Improvement') : ''}}
                            </p>
                        </div>
                        <div style="position: absolute; top:0%; left:50%; width:12.5%;">
                            @if($rep['score'] != null  || $rep['score'] != 0)
                                <div style="{{$rep['score'] > 79 ? 'background-color: #84E36C;': ''}}{{$rep['score'] >= 60 && $rep['score'] <= 79 ? 'background-color: #F3BB2A;': ''}}{{$rep['score'] < 60 ? 'background-color: #EB3333;': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                    <p>{{intval($rep['score'])}}</p>
                                </div>
                            @else
                                <div style="background: #cbd5e0!important; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                                </div>
                            @endif
                        </div>
                        <div style="position: absolute; top:0%; left:62.5%; width:12.5%;">
                            @if($rep['trust'] != null || $rep['trust'] != 0)
                                <div style="{{$rep['trust'] > 79 ? 'background-color: rgba(132, 227, 108, 1);': ''}}{{$rep['trust'] >= 60 && $rep['trust'] <= 79 ? 'background-color: rgba(243, 187, 42, 1);': ''}}{{$rep['trust'] < 60 ? 'background-color: rgba(235, 51, 51, 1);': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                    <p>{{intval($rep['trust'])}}</p>
                                </div>
                            @else
                                <div style=" background-color: #cbd5e0; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                                </div>
                            @endif
                        </div>
                        <div style="position: absolute; top:0%; left:75%; width:12.5%;">
                            @if($rep['impartiality'] != null || $rep['impartiality'] != 0)
                                <div style="{{$rep['impartiality'] > 79 ? 'background-color: rgba(132, 227, 108, 1);': ''}}{{$rep['impartiality'] >= 60 && $rep['impartiality'] <= 79 ? 'background-color: rgba(243, 187, 42, 1);': ''}}{{$rep['impartiality'] < 60 ? 'background-color: rgba(235, 51, 51, 1);': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                    <p>{{intval($rep['impartiality'])}}</p>
                                </div>
                            @else
                                <div style="background-color: #cbd5e0; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                                </div>
                            @endif
                        </div>
                        <div style="position: absolute; top:0%; left:87.5%; width:12.5%;">
                            @if($rep['protection'] != null || $rep['protection'] != 0)
                                <div style="{{$rep['protection'] > 79 ? 'background-color: rgba(132, 227, 108, 1);': ''}}{{$rep['protection'] >= 60 && $rep['protection'] <= 79 ? 'background-color: rgba(243, 187, 42, 1);': ''}}{{$rep['protection'] < 60 ? 'background-color: rgba(235, 51, 51, 1);': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                    <p>{{intval($rep['protection'])}}</p>
                                </div>
                            @else
                                <div style=" background-color: #cbd5e0; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div style="margin-top: 50px;min-height: 100vh;">
            @foreach($chapters as $key => $overall)
                <div style="position: relative;">
                    <div style="height:112px; width:33%; position: absolute; top:0%; left:0%; padding: 16px 0px; border-right: 2px solid rgba(0,0,0,0.51); letter-spacing: -0.05em;">
                        {{$key == 'oc' ? __('Organisational Context') : ''}}
                        {{$key == 'ls' ? __('Leadership') : ''}}
                        {{$key == 'pl' ? __('Planning') : ''}}
                        {{$key == 'sp' ? __('Support') : ''}}
                        {{$key == 'op' ? __('Operations') : ''}}
                        {{$key == 'pe' ? __('Performance Evalutions') : ''}}
                        {{$key == 'ci' ? __('Continual Improvement') : ''}}
                    </div>
                    <div style="width: 67%; height:112px; position: relative; left: 33%; top:0%;">
                        <div style=" position:absolute; left:0px; top:0px; width: 100%;">
                            <div style="position: relative; width: 100%;">
                                <div
                                        style="margin-top: 8px; height:24px; border: 1px solid rgba(0,0,0,0.2); width: {{intval($overall['score'])}}%; background-color: #bccdff;">
                                    <span style="margin-left: 12px;">{{ $overall['score'] != 0 ? intval($overall['score']) : $overall['score']}}% - {{$overall['score'] != 0 ? 'Score and Rag' : ''}}</span>
                                </div>
                            </div>
                        </div>
                        <div style=" position:absolute; left:0px; top:24px; width: 100%;">
                            <div style="position: relative; width: 100%;">
                                <div
                                        style="margin-top: 8px; height:24px; border: 1px solid rgba(0,0,0,0.2); width: {{intval($overall['trust'])}}%; background-color: #d2918e;">
                                    <span style="margin-left: 12px;">{{$overall['trust'] != 0 ? intval($overall['trust']) : $overall['trust']}}% - {{$overall['trust'] != 0 ? __('Trust') : ''}}</span>
                                </div>
                            </div>
                        </div>
                        <div style=" position:absolute; left:0px; top:48px; width: 100%;">
                            <div style="position: relative; width: 100%;">
                                <div
                                        style="margin-top: 8px; height:24px; border: 1px solid rgba(0,0,0,0.2); width: {{intval($overall['trust'])}}%; background-color: #93d899; ">
                                    <span style="margin-left: 12px;">{{$overall['impartiality'] != 0 ? intval($overall['impartiality']) : $overall['impartiality']}}% - {{$overall['impartiality'] != 0 ?  __('Impartiality') : ''}}</span>
                                </div>
                            </div>
                        </div>
                        <div style=" position:absolute; left:0px; top:72px; width: 100%;">
                            <div style="position: relative; width: 100%;">
                                <div
                                        style="margin-top: 8px; height:24px; border: 1px solid rgba(0,0,0,0.2); width: {{intval($overall['trust'])}}%; background-color: #d8d899;">
                                    <span style="margin-left: 12px;">{{$overall['protection'] != 0 ? intval($overall['protection']) : $overall['protection']}}% - {{$overall['protection'] != 0 ? __('Protection') : ''}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@foreach($reports as $key => $report)
    <div class="page-break" style=" margin-bottom: 100px; min-height:100%;">
        <div style="width:100%;">
            <p class="lg-text" style="color: #1B3C5D;margin-bottom: 8px; font-weight: bold;">
                {{ __('Section') }} {{$key}}. {{$report[0]->section->title}}
            </p>

            <p style=" font-size: 24px; margin-bottom: 0px; font-weight: bold;">
                {{ __('Main scores') }}
            </p>
            <div style="position: relative; width: 100%; border-bottom: 1px solid #000000; margin-top: 8px;">
                <div style="width:50%;">
                    <p style="margin-bottom: 4px;">
                        {{ __('Question') }}
                    </p>
                </div>
                <div style="position: absolute; top:0%; left:50%; width:12.5%;">
                    <p style="margin-bottom: 4px;">
                        {{ __('Score') }} (%)
                    </p>
                </div>
                <div style="position: absolute; width: 12.5%; left: 62.5%; top:0%;">
                    <p style="margin-bottom: 4px;">
                        {{ __('Trust') }}
                    </p>
                </div>
                <div style="position: absolute; width: 12.5%; left: 75%; top:0%;">
                    <p style="margin-bottom: 4px;">
                        {{ __('Impartiality') }}
                    </p>
                </div>
                <div style="position: absolute; width: 12.5%; left: 87.5%; top:0%;">
                    <p style="margin-bottom: 4px;">
                        {{ __('Protection') }}
                    </p>
                </div>
            </div>
            @foreach($report as $rep)
                <div style="position: relative; width: 100%; margin-top: 26px;">
                    <div style="width: 50%;">
                        <p class="regular-text" style="margin-bottom: 8px; font-weight: bold;">
                            {{$rep->block->title}}
                        </p>
                    </div>
                    <div style="position: absolute; top:0%; left:50%; width:12.5%;">
                        @if($rep->scores['main']['scores'] != null)
                            <div style="{{$rep->scores['main']['scores'] > 79 ? 'background-color: #84E36C;': ''}}{{$rep->scores['main']['scores'] >= 60 && $rep->scores['main']['scores'] <= 79 ? 'background-color: #F3BB2A;': ''}}{{$rep->scores['main']['scores'] < 60 ? 'background-color: #EB3333;': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                <p>{{intval($rep->scores['main']['scores'])}}</p>
                            </div>
                        @else
                            <div style="background: #cbd5e0!important; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                            </div>
                        @endif
                    </div>
                    <div style="position: absolute; top:0%; left:62.5%; width:12.5%;">
                        @if($rep->scores['main']['trust'] != null)
                            <div style="{{$rep->scores['main']['trust'] > 79 ? 'background-color: rgba(132, 227, 108, 1);': ''}}{{$rep->scores['main']['trust'] >= 60 && $rep->scores['main']['trust'] <= 79 ? 'background-color: rgba(243, 187, 42, 1);': ''}}{{$rep->scores['main']['trust'] < 60 ? 'background-color: rgba(235, 51, 51, 1);': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                <p>{{intval($rep->scores['main']['trust'])}}</p>
                            </div>
                        @else
                            <div style=" background-color: #cbd5e0; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                            </div>
                        @endif
                    </div>
                    <div style="position: absolute; top:0%; left:75%; width:12.5%;">
                        @if($rep->scores['main']['impartiality'] != null)
                            <div style="{{$rep->scores['main']['impartiality'] > 79 ? 'background-color: rgba(132, 227, 108, 1);': ''}}{{$rep->scores['main']['impartiality'] >= 60 && $rep->scores['main']['impartiality'] <= 79 ? 'background-color: rgba(243, 187, 42, 1);': ''}}{{$rep->scores['main']['impartiality'] < 60 ? 'background-color: rgba(235, 51, 51, 1);': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                <p>{{intval($rep->scores['main']['impartiality'])}}</p>
                            </div>
                        @else
                            <div style="background-color: #cbd5e0; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                            </div>
                        @endif
                    </div>
                    <div style="position: absolute; top:0%; left:87.5%; width:12.5%;">
                        @if($rep->scores['main']['protection'] != null)
                            <div style="{{$rep->scores['main']['protection'] > 79 ? 'background-color: rgba(132, 227, 108, 1);': ''}}{{$rep->scores['main']['protection'] >= 60 && $rep->scores['main']['protection'] <= 79 ? 'background-color: rgba(243, 187, 42, 1);': ''}}{{$rep->scores['main']['protection'] < 60 ? 'background-color: rgba(235, 51, 51, 1);': ''}} border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px; text-align: center;">
                                <p>{{intval($rep->scores['main']['protection'])}}</p>
                            </div>
                        @else
                            <div style=" background-color: #cbd5e0; border: 1px solid rgba(0,0,0,0.2); border-radius: 4px; width:60px; height: 60px;">
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endforeach

</body>
</html>
