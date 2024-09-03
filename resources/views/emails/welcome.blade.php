@component('mail::message')
<div style="text-align: center; margin-bottom: 20px;">
    <!-- <img src="https://drive.google.com/file/d/1q5W1QqF3z99xy4iOAbZC1FO1E7O40l5b/view?usp=sharing" alt="GuidanceHub Logo" width="150"> -->
</div>

# Welcome to GuidanceHub – Navigating Journeys Through MentorMate!

Hello {{ $mailData['name'] }},

Thank you for joining GuidanceHub, your gateway to personalized excellence. We're thrilled to have you on board as you embark on a journey through MentorMate!

**Name:** {{ $mailData['name'] }}<br/>
**Email:** {{ $mailData['email'] }}

Feel the excitement as you explore our platform, connecting with experienced creators and mentors who will guide you on your path to personal and professional growth. At GuidanceHub, we believe in the power of mentorship to shape your unique journey.

But that's not all! Once you've registered, be sure to head over to your messages and set up your profile icon. Make your mark by customizing your theme, reflecting your personality and aspirations. Let your profile stand out as a testament to the skills you're ready to share and the ones you're eager to acquire.

If you have any questions or need assistance at any point, don't hesitate to reach out. Our dedicated team is here to support you on your GuidanceHub adventure.

<div style="margin-top: 30px; text-align: center;">
    Exciting times await you at GuidanceHub!<br/>
    Cheers,<br/>
    The GuidanceHub Team
</div>
@endcomponent
