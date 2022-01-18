<h2>Companies report</h2>
<p> </p>
<table>
    <thead>
    <tr>
        <th style="border: 2px solid black; font-weight: bold; font-size: 12px;">Company</th>
        <th style="border: 2px solid black; font-weight: bold; font-size: 12px;">Owner name</th>
        <th style="border: 2px solid black; font-weight: bold; font-size: 12px;">Email</th>
        <th style="border: 2px solid black; font-weight: bold; font-size: 12px;">Job title</th>
        <th style="border: 2px solid black; font-weight: bold; font-size: 12px;">Phone</th>
        <th style="border: 2px solid black; font-weight: bold; font-size: 12px;">Pay date</th>
        <th style="border: 2px solid black; font-weight: bold; font-size: 12px;">End date</th>
        <th style="border: 2px solid black; font-weight: bold; font-size: 12px;">Employees</th>
    </tr>
    </thead>
    <tbody>

    @foreach($companies as $company)
        <tr>
            <td style="text-align: left;">
                @if($company->title != null)
                    {{ $company->title}}
                @endif
            </td>
            <td style="text-align: left;">
                @if($company->owner->name != null)
                    {{ $company->owner->name }}
                @endif
            </td>
            <td style="text-align: left;">
                @if($company->owner->email != null)
                    {{ $company->owner->email }}
                @endif
            </td>
            <td style="text-align: left;">
                @if($company->owner->job_title != null)
                    {{ $company->owner->job_title }}
                @endif
            </td>
            <td style="text-align: left;">
                @if($company->owner->phone != null)
                    {{ $company->owner->phone }}
                @endif
            </td>
            <td style="text-align: left;">
                @if($company->pay_date != null)
                    {{$company->pay_date}}
                @endif
            </td>
            <td style="text-align: left;">
                @if($company->end_date != null)
                    {{$company->end_date}}
                @endif
            </td>
            <td style="text-align: left;">
            @foreach($company->users as $key => $user)
                @if($user->name != null && $user->email)
                        {{$key != 0 ? ' ,' : ''}} {{$user->name}} {{$user->job_title ? ' - '.$user->job_title : ''}} - {{$user->email}}
                @endif
            @endforeach
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
