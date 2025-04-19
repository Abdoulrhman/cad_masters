@component('mail::message')
# New Job Application Received

A new job application has been submitted for the position of **{{ $application->position }}**.

## Applicant Details:
- **Name:** {{ $application->full_name }}
- **Email:** {{ $application->email }}
- **Phone:** {{ $application->phone }}

### Experience
{{ $application->experience }}

### Skills
{{ $application->skills }}

@if($application->cover_letter)
### Cover Letter
{{ $application->cover_letter }}
@endif

@component('mail::button', ['url' => url('/dashboard/job-applications')])
View Application
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
