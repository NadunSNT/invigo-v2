<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('company_id'); // company_id int(11) auto_increment primary key
            $table->string('company_name', 100)->notNull(); // company_name varchar(100) not_null
            $table->string('company_contact', 20)->notNull(); // company_contact varchar(20) not_null
            $table->string('company_email', 100)->notNull(); // company_email varchar(100) not_null
            $table->string('company_address', 200)->nullable(); // company_address varchar(200) null
            $table->string('company_logo', 50)->nullable(); // company_logo varchar(50) null
            $table->enum('company_type', ['company', 'branch', 'department'])
                ->default('company')
                ->comment('Only company, branch, department values are allowed'); // company_type varchar(15)
            $table->longText('additional_details')->nullable(); // additional_details longtext
            $table->string('status', 15)->default('active'); // status varchar(15) with default active, no strict rule on values
            $table->timestamp('c_date')->useCurrent(); // c_date timestamp default current_timestamp()
            $table->timestamp('m_date')->useCurrent()->useCurrentOnUpdate(); // m_date timestamp default current_timestamp() on update current_timestamp
            $table->timestamps();

            // Add index to company_type
            $table->index('company_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
