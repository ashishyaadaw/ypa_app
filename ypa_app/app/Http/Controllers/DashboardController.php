<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    //Home page of Dashboard
    function showDashboard()
    {
        $email = Auth::user()->email;
        $name = Auth::user()->name;
        return view("dashboard.dashboard", ["title" => "Dashboard", "folder" => "Dashboard", "email" => $email, "name" => $name]);

    }
    function showDashboardMenus(string $input)
    {
        $email = Auth::user()->email;
        $name = Auth::user()->name;

        switch ($input) {
            case 'photo_gallery':

                return view("dashboard.gallery.photo", ["title" => "Photo Gallery", "folder" => "Gallery", "email" => $email, "name" => $name]);

            case 'video_gallery':

                return view("dashboard.gallery.video", ["title" => "Video Gallery", "folder" => "Gallery", "email" => $email, "name" => $name]);

            default:
                # code...
                break;
        }


    }
    function showForms(string $input = null)
    {
        return view("dashboard.forms.forms", ["title" => "Forms"]);

    }
    function showVolunteers(string $input = null)
    {
        return view("dashboard.forms.volunteers", data: ["title" => "Volunteers Management"]);

    }
    function showMembers(string $input = null)
    {
        return view("dashboard.forms.member", data: ["title" => "Members Management"]);

    }
    function showInternships(string $input = null)
    {
        return view("dashboard.forms.internship", data: ["title" => "Internships Management"]);

    }
    function showStreetPlay(string $input = null)
    {
        return view("dashboard.forms.street_play", data: ["title" => "Street Play Management"]);

    }
    function showCampusAmbassador(string $input = null)
    {
        return view("dashboard.forms.campus_ambassador", data: ["title" => "Campus Ambassador Management"]);

    }
    function showResearcher(string $input = null)
    {
        return view("dashboard.forms.researcher", data: ["title" => "Researcher Management"]);

    }
    function showContacts(string $input = null)
    {
        return view("dashboard.forms.requested_contacts", data: ["title" => "Contacts"]);

    }
    function showDistrictCoordinators(string $input = null)
    {
        return view("dashboard.forms.district_coordinator", data: ["title" => "District Coordinators Management"]);

    }
    function showCsrPartners(string $input = null)
    {
        return view("dashboard.forms.csr_partner", data: ["title" => "CSR Partners Management"]);

    }
    function showNotices(string $input = null)
    {
        return view("dashboard.components.notices", data: ["title" => "Dashboard", "folder" => "Dashboard"]);

    }
    function showBlogs(string $input = null)
    {
        return view("dashboard.components.blogs", data: ["title" => "Dashboard", "folder" => "Dashboard"]);

    }
    function showSlides(string $input = null)
    {
        return view("dashboard.components.slides", ["title" => "Dashboard", "folder" => "Dashboard"]);

    }
    function showControls(string $input = null)
    {
        return view("dashboard.components.controls", data: ["title" => "Dashboard", "folder" => "Dashboard"]);

    }
    function showTestimonials(string $input = null)
    {
        return view("dashboard.components.testimonials", data: ["title" => "Dashboard", "folder" => "Dashboard"]);

    }
    function showPartners(string $input = null)
    {
        return view("dashboard.components.partners", data: ["title" => "Dashboard", "folder" => "Dashboard"]);

    }
    function showMentors(string $input = null)
    {
        return view("dashboard.components.mentors", data: ["title" => "Dashboard", "folder" => "Dashboard"]);

    }
    function showTables(string $input = null)
    {
        return view("dashboard.tables.tables", ["title" => "Dashboard", "folder" => "Dashboard"]);

    }
    function showPages(string $input = null)
    {
        return view("dashboard.pages.pages", ["title" => "Dashboard", "folder" => "Dashboard"]);

    }
    function showCr(string $input = null)
    {
        return view("dashboard.dashboard", ["title" => "Dashboard", "folder" => "Dashboard"]);

    }
}
