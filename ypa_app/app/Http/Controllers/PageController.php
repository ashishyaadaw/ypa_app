<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    function sendEmail()
    {
        $data = [
            'name' => 'John Doe',
            'message' => 'This is a test email.',
        ];

        Mail::to('ashishyaadaw@gmail.com')->send(new SendMail($data));

        return 'Email sent successfully!';
    }
    function showAbout(string $input)
    {

        switch ($input) {
            case 'about-ypa':

                return view("pages.about.about-ypa", ["title" => "About YPA", "folder" => "About", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'how-ypa-came-to-live':
                return view("pages.about.how-ypa-came-to-live", ["title" => "How YPA came to live", "folder" => "About", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'how-we-work':
                return view("pages.about.how-we-work", ["title" => "How we work", "folder" => "About", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'vision-&-misson':
                return view("pages.about.vision-&-misson", ["title" => "Vision and Mission", "folder" => "About", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'team':
                return view("pages.about.team", ["title" => "Team", "folder" => "About", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'our-reach':
                return view("pages.about.our-reach", ["title" => "Our Reach", "folder" => "About", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);
            case 'our-mentor-&-advisors':
                return view("pages.about.our-mentor-&-advisors", ["title" => "Our Mentors & Advisors", "folder" => "About", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'legal-status-and-empanelments':
                return view("pages.about.legal-status-and-empanelments", ["title" => "Legal status and empanelment", "folder" => "About", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            default:
                return view("pages.about.layout", ["title" => "", "folder" => "About", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);
        }

    }

    function showWork(string $input)
    {
        switch ($input) {
            case 'water-conservation':
                return view("pages.work.water-conservation", ["title" => "Water Conservation", "folder" => "What we do", "bg_color" => "bg-gradient-to-b from-sky-100 to-transparent dark:from-zink-900/20"]);

            case 'environment-protection':
                return view("pages.work.environment-protection", ["title" => "Environment Protection", "folder" => "What we do", "bg_color" => "bg-gradient-to-b from-green-100 to-transparent dark:from-zink-900/20"]);

            case 'health-&-well-being':
                return view("pages.work.health-&-well-being", ["title" => "Health And Well Being", "folder" => "What we do", "bg_color" => "bg-gradient-to-b from-blue-100 to-transparent dark:from-zink-900/20"]);

            case 'youth-development':
                return view("pages.work.youth-development", ["title" => "Youth Development", "folder" => "What we do", "bg_color" => "bg-gradient-to-b from-red-100 to-transparent dark:from-zink-900/20"]);

            case 'ypa-theatre':
                return view("pages.work.ypa-theatre", ["title" => "YPA Theatre", "folder" => "What we do", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);
            case 'ypa-band':
                return view("pages.work.ypa-band", ["title" => "YPA Band", "folder" => "What we do", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            default:
                return view("pages.work.layout", ["title" => "", "folder" => "What we do", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);
        }

    }
    function showProject(string $input)
    {
        switch ($input) {
            case 'smart-yuva':
                return view("pages.project.smart-yuva", ["title" => "Smart Yuva", "folder" => "Project", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'jaago':
                return view("pages.project.jaago", ["title" => "JAAGO", "folder" => "Project", "bg_color" => "bg-gradient-to-b from-yellow-100 to-transparent dark:from-zink-900/20"]);

            case 'paryavaran-mitra':
                return view("pages.project.paryavaran-mitra", ["title" => "Paryavaran Mitra", "folder" => "Project", "bg_color" => "bg-gradient-to-b from-green-100 to-transparent dark:from-zink-900/20"]);

            case 'jal-rakshak':
                return view("pages.project.jal-rakshak", ["title" => "Jal Rakshak", "folder" => "Project", "bg_color" => "bg-gradient-to-b from-sky-100 to-transparent dark:from-zink-900/20"]);

            default:
                return view("pages.project.layout");
        }

    }
    function showMediacorner(string $input, string $id = '1')
    {
        switch ($input) {
            case 'blog-&-articles':
                return view("pages.mediacorner.blog-&-articles", ["title" => "Blog & Article", "id" => $id, "folder" => "Media Corner", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'publications':
                return view("pages.mediacorner.publications", ["title" => "Publications", "folder" => "Media Corner", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'stories-of-change':
                return view("pages.mediacorner.stories-of-change", ["title" => "Stories of Change", "folder" => "Media Corner", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'in-the-news':
                return view("pages.mediacorner.in-the-news", ["title" => "In the News", "folder" => "Media Corner", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            default:
                return view("pages.mediacorner.layout", ["title" => "", "folder" => "Media Corner", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);
        }

    }
    function showBlogAndMedia(string $id = '1')
    {
        return view("pages.mediacorner.blog-&-articles", ["title" => "Blog & Article", "id" => $id, "folder" => "Media Corner", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

    }
    function showGallery(string $input)
    {




        switch ($input) {
            case 'photo-gallery':
                return view("pages.gallery.photo-gallery", ["title" => "Photo Gallery", "folder" => "Gallery", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'video-gallery':
                return view("pages.gallery.video-gallery", ["title" => "Video Gallery", "folder" => "Gallery", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            default:
                return view("pages.gallery.layout");
        }

    }
    function showActivity(string $input)
    {
        switch ($input) {
            case 'our-campaign-&-activities':
                return view("pages.activities.our-campaign-&-activities", ["title" => "Our Campaign & Activities", "folder" => "Activties", "bg_color" => "bg-gradient-to-r from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'events':
                return view("pages.activities.events", ["title" => "Events", "folder" => "Activties", "bg_color" => "bg-gradient-to-br  from-red-200 via-transparent to-blue-300"]);

            default:
                return view("pages.activities.layout", ["title" => "", "folder" => "Activties", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);
        }

    }
    function showJoinus(string $input)
    {
        switch ($input) {
            case 'join-as-volunteer':
                return view("pages.joinus.join-as-volunteer", ["title" => "Volunteer Form", "folder" => "Joinus", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20", "formId" => '1']);

            case 'became-a-member':
                return view("pages.joinus.became-a-member", ["title" => "Member Form", "folder" => "Joinus", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            case 'join-street-play-team':
                return view("pages.joinus.join-street-play-team", ["title" => "Street Play Form", "folder" => "Joinus", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20", "formId" => '2']);

            case 'internship':
                return view("pages.joinus.internship", ["title" => "Internship Form", "folder" => "Joinus", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20", "formId" => '2']);

            case 'campus-ambassador':
                return view("pages.joinus.campus-ambassador", ["title" => "Campus Ambassador Form", "folder" => "Joinus", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);
            case 'researcher':
                return view("pages.joinus.researcher", ["title" => "Researcher Form", "folder" => "Joinus", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);
            case 'district-coordinator':
                return view("pages.joinus.district-coordinator", ["title" => "District Co-ordinator Form", "folder" => "Joinus", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);
            case 'csr-partner-granter':
                return view("pages.joinus.csr-partner-granter", ["title" => "CSR Partner / Granter Form", "folder" => "Joinus", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);

            default:
                return view("pages.joinus.layout", ["title" => "", "folder" => "Joinus", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);
        }

    }
    function showDonation()
    {
        return view("pages.donation.donation", ["title" => "Donation Page", "folder" => "Donation", "bg_color" => "bg-[url('http://127.0.0.1:8000/uploads/gallery/image.jpeg')] bg-scroll bg-cover w-full ", "formId" => '1']);

        // switch ($input) {
        //     case 'donation':
        //         return view("pages.donation.donation", ["title" => "Volunteer Form", "folder" => "Joinus", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20", "formId" => '1']);

        //     default:
        //         return view("pages.donation.layout", ["title" => "", "folder" => "Joinus", "bg_color" => "bg-gradient-to-b from-[#FEF9E9] to-transparent dark:from-zink-900/20"]);
        // }

    }
}