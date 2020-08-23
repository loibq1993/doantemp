<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SchoolRecordDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_record_detail', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('class_id');
            $table->string('school_year_id');
            //Toán
            $table->float('toan_1');
            $table->float('toan_2');
            $table->float('toan_CN');
            $table->float('toan_L')->nullable(true);
            //Vật lý
            $table->float('ly_1');
            $table->float('ly_2');
            $table->float('ly_CN');
            $table->float('ly_L')->nullable(true);
            //Hóa học
            $table->float('hoa_1');
            $table->float('hoa_2');
            $table->float('hoa_cn');
            $table->float('hoa_l')->nullable(true);
            //Sinh học
            $table->float('sinh_1');
            $table->float('sinh_2');
            $table->float('sinh_CN');
            $table->float('sinh_L')->nullable(true);
            //Tin học
            $table->float('tin_1');
            $table->float('tin_2');
            $table->float('tin_CN');
            $table->float('tin_L')->nullable(true);
            //Ngữ văn
            $table->float('van_1');
            $table->float('van_2');
            $table->float('van_cn');
            $table->float('van_l')->nullable(true);
            //Sử
            $table->float('su_1');
            $table->float('su_2');
            $table->float('su_cn');
            $table->float('su_l')->nullable(true);
            //Địa
            $table->float('dia_1');
            $table->float('dia_2');
            $table->float('dia_cn');
            $table->float('dia_l')->nullable(true);
            //Tiếng anh
            $table->float('tienganh_1');
            $table->float('tienganh_2');
            $table->float('tienganh_cn');
            $table->float('tienganh_lai')->nullable(true);
            //Công nghệ
            $table->float('cn_1');
            $table->float('cn_2');
            $table->float('cn_cn');
            $table->float('cn_l')->nullable(true);
            //QP
            $table->float('qp_1');
            $table->float('qp_2');
            $table->float('qp_cn');
            $table->float('qp_l')->nullable(true);
            //Thể chất
            $table->string('tc_1');
            $table->string('tc_2');
            $table->string('tc_cn');
            $table->string('tc_l')->nullable(true);
            //Nghề PHPT
            $table->float('nghe_1')->nullable(true);
            $table->float('nghe_2')->nullable(true);
            $table->float('nghe_cn')->nullable(true);
            $table->float('nghe_l')->nullable(true);
            //Công dân
            $table->float('congdan_1');
            $table->float('congdan_2');
            $table->float('cd_cn');
            $table->float('cd_l')->nullable(true);
            //Điểm TB
            $table->float('DTBHK1');
            $table->float('DTBHK2');
            $table->float('DTBHLCN');
            $table->float('DTBL')->nullable(true);
            //học lực
            $table->string('HL1');
            $table->string('HL2');
            $table->string('HLCN');
            $table->string('HLL')->nullable(true);
            //Hạnh kiểm
            $table->string('HK1');
            $table->string('HK2');
            $table->string('HKCN');
            $table->string('HKL')->nullable(true);
            //Others
            $table->string('chungchi')->nullable(true);
            $table->string('giaithuong')->nullable(true);
            $table->string('value_giaithuong')->nullable(true);
            $table->string('KTDB')->nullable(true);

            $table->string('NXGV');
            $table->string('NXHT');
            //Giáo viên bộ môn
            $table->string('gvtoan');
            $table->string('gvvan');
            $table->string('gvanh');
            $table->string('gvly');
            $table->string('gvhoa');
            $table->string('gvsinh');
            $table->string('gvsu');
            $table->string('gvdia');
            $table->string('gvtin');
            $table->string('gvgdcd');
            $table->string('gvtd');
            $table->string('gvqpan');
            $table->string('qvcongnghe');
            $table->string('gvnghe')->nullable(true);
            $table->string('gvcn');


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');
            $table->timestamps();        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_record_detail_detail');
    }
}
