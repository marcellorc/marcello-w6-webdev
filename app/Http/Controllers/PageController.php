<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Changed method name from home to index
        $features = [
            ['title' => 'High Quality Prints', 'desc' => 'Studio-quality lighting and professional DSLR cameras ensure your guests look their best.'],
            ['title' => 'Custom Props', 'desc' => 'A huge variety of fun, quirky, and themed props tailored for your specific event.'],
            ['title' => 'Instant Sharing', 'desc' => 'Share photos instantly via email or QR code direct from the photobooth screen.']
        ];

        // Points to index.blade.php
        return view('index', compact('features'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $packages = [
            [
                'name' => 'Basic Snap',
                'price' => 'Rp 1.500.000',
                'duration' => '2 hours',
                'features' => ['Unlimited Prints (2x6)', 'Standard Backdrop', 'Fun Props Set', 'Online Gallery'],
                'btn_class' => 'btn-outline-dark'
            ],
            [
                'name' => 'Premium Joy',
                'price' => 'Rp 2.500.000',
                'duration' => '4 hours',
                'features' => ['Unlimited Premium Prints (4x6)', 'Custom Premium Backdrop', 'Themed High-End Props', 'Boomerang & GIF Creation', 'Scrapbook Station'],
                'btn_class' => 'btn-warning'
            ],
            [
                'name' => 'Wedding VIP',
                'price' => 'Rp 4.000.000',
                'duration' => '6 hours',
                'features' => ['Everything in Premium', '360 Video Booth Included', 'Custom Photo Template Design', 'Instant Social Media Sharing Kiosk', 'Idle Time (1 hour free)'],
                'btn_class' => 'btn-outline-dark'
            ]
        ];

        return view('services', compact('packages'));
    }

    public function contact()
    {
        return view('contact');
    }
}