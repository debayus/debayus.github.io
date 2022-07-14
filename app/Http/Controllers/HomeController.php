<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function gallery()
    {
        $models = [
            [
                'image' => '/images/.png',
                'title' => 'Whatsapp Bot',
                'description' => 'Reservasi dan informasi dapat melalui whatsapp.',
                'youtube' => 'https://youtu.be/T8HeXCcZeW8',
                'tags' => [
                    'Node.js',
                    'Postgresql'
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'Mobile Laundry',
                'description' => 'Billing laundry dan laporan yang lengkap',
                'youtube' => 'https://youtu.be/RZBRM68Zb4U',
                'tags' => [
                    'React Native',
                    'ASP.NET Core',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'Jacker',
                'description' => 'Membuat aplikasi dengan mudah',
                'youtube' => 'https://youtu.be/TJ6cjvtF-cA',
                'tags' => [
                    'ASP.NET Core',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'Json to Dart',
                'description' => 'Conversi json ke dart dengan standar mahas',
                'youtube' => 'https://youtu.be/xQ6LcpS0QSY',
                'git' => 'https://github.com/debayus/converter',
                'tags' => [
                    'Laravel'
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'HR Portal',
                'description' => 'Kelola jadwal, data pribadi, dan absesi dengan mudah',
                'youtube' => 'https://youtu.be/ridUA3RG57E',
                'tags' => [
                    'React Native',
                    'Flutter',
                    'ASP.NET Core',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'HL7 Reciver',
                'description' => 'Terhubung dengan PACS / Radiologi',
                'git' => 'https://github.com/debayus/hl7receiver',
                'tags' => [
                    'C#',
                    'SQL Server',
                    'HL7',
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'Bridging Serial Port',
                'description' => 'Terhubung dengan LIS / Lab',
                'git' => 'https://github.com/debayus/serialport',
                'tags' => [
                    'C#',
                    'SQL Server',
                ]
            ],
            [
                'image' => '/images/WebSolazy.png',
                'title' => 'Web Laundry',
                'description' => 'Billing laundry dan laporan yang lengkap',
                'youtube' => 'https://youtu.be/V4YMPtwZPRg',
                'tags' => [
                    'ASP.NET Framework',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'Elektronik Rekam Medis',
                'description' => 'Pencatatan Rekam Medis Pasien',
                'tags' => [
                    'ASP.NET Core',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'PalapaNet Admin',
                'description' => 'Pencatatan langganan kustomer dan billing',
                'tags' => [
                    'ASP.NET Core',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'Reservasi Rikkes',
                'description' => 'Pencatatan reservasi pemeriksaan kesehatan',
                'tags' => [
                    'ASP.NET Core',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'Form Survey',
                'description' => 'Mengisi Survey dan Kustomisasi form secara dinamis',
                'tags' => [
                    'ASP.NET Core',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'Antrian',
                'description' => 'Display dan pemanggilan antrian',
                'tags' => [
                    'ASP.NET Core',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/DugdugAdmin.png',
                'title' => 'Dugdug Admin',
                'description' => 'Pencatatan pesanan kelapa',
                'youtube' => 'https://youtu.be/kdIajYBcLMc',
                'tags' => [
                    'Xamarin',
                    'ASP.NET Framework',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/DugdugOrder.png',
                'title' => 'Dugdug Order',
                'description' => 'Pemesanan kelapa secara online',
                'youtube' => 'https://youtu.be/PQPtL7SRrL8',
                'tags' => [
                    'ASP.NET Core',
                    'SQL Server'
                ]
            ],

            [
                'image' => '/images/KonsultasiOnline.png',
                'title' => 'Konsultasi Online',
                'description' => 'Konsultasi dengan video call',
                'tags' => [
                    'Node.js'
                ]
            ],
            [
                'image' => '/images/RegistrasiMandiri.png',
                'title' => 'Kiosk Registrasi',
                'description' => 'Registrasi pasien secara mandiri',
                'tags' => [
                    'ASP.NET Framework',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/Pelayanan.png',
                'title' => 'Pelayanan',
                'description' => 'Pencatatan pelayanan RI, RJ, OK, VK dan UGD',
                'tags' => [
                    'ASP.NET Framework',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/Akreditasi.png',
                'title' => 'Akreditasi',
                'description' => 'Pencatatan dan laporan K3RS, PPI Rumah Sakit',
                'tags' => [
                    'ASP.NET Framework',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/ExecutiveReport.png',
                'title' => 'Executive Report',
                'description' => 'Laporan BOR, Kunjungan, Omset, Cash Flow, dll.',
                'tags' => [
                    'ASP.NET Framework',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/CekResep.png',
                'title' => 'Cek Resep',
                'description' => 'Melihat status resep secara mandiri',
                'tags' => [
                    'ASP.NET Framework',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/Portal.png',
                'title' => 'Portal',
                'description' => 'Terhubung dengan vendor lain, seperti BPJS, PACS, PPI, dan LAB',
                'tags' => [
                    'ASP.NET Framework',
                    'SQL Server',
                    'HL7'
                ]
            ],
            [
                'image' => '/images/DisplayJadwalOperasi.png',
                'title' => 'Display Jadwal Operasi',
                'description' => 'Informasi pasien yang akan melakukan operasi',
                'tags' => [
                    'ASP.NET Framework',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/KasirMini.png',
                'title' => 'Kasir Mini',
                'description' => 'Pencatatan transaksi kasir dengan mudah',
                'tags' => [
                    'React Native',
                    'SQL Lite',
                ]
            ],
            [
                'image' => '/images/Inventory.png',
                'title' => 'Inventory',
                'description' => 'Mencatat keluar masuk barang di masing-masing unit',
                'tags' => [
                    'ASP.NET Framework',
                    'SQL Server'
                ]
            ],
            [
                'image' => '/images/.png',
                'title' => 'Lainnya',
                'description' => 'Aplikasi lainnya tidak dapat ditampilkan',
                'tags' => [
                ]
            ],
        ];
        return view('gallery', [
            'models' => $models
        ]);
    }
}
