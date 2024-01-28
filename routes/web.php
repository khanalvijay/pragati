<?php

use Illuminate\Support\Facades\Route;
use App\livewire\ShowHome;
use App\livewire\ShowContactPage;
use App\livewire\ShowSavingSchemePage;
use App\livewire\ShowLoanSchemePage;
use App\livewire\ShowRemitPage;
use App\livewire\ShowImportantLinkPage;
use App\livewire\ShowExchangeRatePage;
use App\livewire\ShowFAQPage;
use App\livewire\ShowAboutUsPage;
use App\livewire\ShowMessageChairmanPage;
use App\livewire\ShowBODPage;
use App\livewire\ShowAccountSCPage;
use App\livewire\ShowOtherCommitteePage;
use App\livewire\ShowHOMTPage;
use App\livewire\ShowSSHPage;
use App\livewire\ShowDownloadPage;
use App\livewire\ShowReportsPage;
use App\livewire\ShowBranchesPage;
use App\livewire\ShowGalleryPage;
use App\livewire\ShowNewsPage;
use App\livewire\ShowIntrestRatePage;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',ShowHome::class)->name('ShowHomes');

Route::get('/intrest-rate',ShowIntrestRatePage::class)->name('ShowIntrestRate');

/* About Section */
Route::get('/about-us', ShowAboutUsPage::class)->name('ShowAboutUs');
Route::get('/message-from-chairman', ShowMessageChairmanPage::class)->name('ShowMessageChairman');
Route::get('team/board-of-directors', ShowBODPage::class)->name('ShowBOD');
Route::get('/team/account-committee', ShowAccountSCPage::class)->name('ShowAccountSC');
Route::get('/team/other-committee', ShowOtherCommitteePage::class)->name('ShowOtherCommittee');
Route::get('/team/head-office-management-team', ShowHOMTPage::class)->name('ShowHOMT');
Route::get('/team/service-center-heads', ShowSSHPage::class)->name('ShowSSH');



/* Services Section */
Route::get('/schemes/saving-schemes', ShowSavingSchemePage::class)->name('ShowSaving');
Route::get('/schemes/loan-schemes', ShowLoanSchemePage::class)->name('ShowLoan');
Route::get('/remittance', ShowRemitPage::class)->name('ShowRemit');

Route::get('/downloads', ShowDownloadPage::class)->name('ShowDownload');

Route::get('/reports', ShowReportsPage::class)->name('ShowReports');

Route::get('/branches', ShowBranchesPage::class)->name('ShowBranches');

Route::get('/gallery', ShowGalleryPage::class)->name('ShowGallery');

Route::get('/news', ShowNewsPage::class)->name('ShowNews');




Route::get('/contact-us', ShowContactPage::class)->name('ShowContact');


/* Quick Links */
Route::get('/important-links', ShowImportantLinkPage::class)->name('ShowImportantLink');
Route::get('/exchange-rates', ShowExchangeRatePage::class)->name('ShowExchangeRate');
Route::get('/faqs', ShowFAQPage::class)->name('ShowFAQ');
