<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'key'                => 'Key',
            'key_helper'         => 'Unique identifier for this role, should be in snake_case, e.g. customer',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'first_name'               => 'First name',
            'first_name_helper'        => ' ',
            'last_name'                => 'Last name',
            'last_name_helper'         => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'uid'                      => 'UID',
            'uid_helper'               => 'Represents Firebase User Id',
            'phone_number'             => 'Phone Number',
            'phone_number_helper'      => ' ',
            'fcm_token'                => 'FCM Token',
            'fcm_token_helper'         => 'Generated by firebase and used in notifications',
            'categories'               => 'Categories',
            'categories_helper'        => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'color'             => 'Color',
            'color_helper'      => 'Should be in hex-decimal format, Example: #1b1b1b',
            'icon'              => 'Icon',
            'icon_helper'       => 'A URL for the category icon',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'key'               => 'Key',
            'key_helper'        => 'Unique identifier for this category, should be in snake_case, e.g. cleaners',
        ],
    ],
    'service' => [
        'title'          => 'Services',
        'title_singular' => 'Service',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'icon'               => 'Icon',
            'icon_helper'        => 'A URL for the category icon',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'duration'           => 'Duration',
            'duration_helper'    => 'Service duration in minutes',
            'price'              => 'Price',
            'price_helper'       => ' ',
            'category'           => 'Category',
            'category_helper'    => ' ',
            'key'                => 'Key',
            'key_helper'         => 'Unique identifier for this service, should be in snake_case, e.g. home_cleaning',
            'description'        => 'Description',
            'description_helper' => ' ',
            'commission'         => 'Commission',
            'commission_helper'  => ' ',
        ],
    ],
    'status' => [
        'title'          => 'Booking Statuses',
        'title_singular' => 'Booking Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'key'               => 'Key',
            'key_helper'        => 'Unique identifier for this status, should be in snake_case, e.g. in_progress',
        ],
    ],
    'booking' => [
        'title'          => 'Bookings',
        'title_singular' => 'Booking',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'key'                    => 'Key',
            'key_helper'             => ' ',
            'service'                => 'Service',
            'service_helper'         => ' ',
            'status'                 => 'Status',
            'status_helper'          => ' ',
            'booking_at'             => 'Booking At',
            'booking_at_helper'      => ' ',
            'notes'                  => 'Notes',
            'notes_helper'           => ' ',
            'latitude'               => 'Latitude',
            'latitude_helper'        => 'Booking location latitude',
            'longitude'              => 'Longitude',
            'longitude_helper'       => 'Booking location longitude',
            'address_name'           => 'Address Name',
            'address_name_helper'    => ' ',
            'address_details'        => 'Address Details',
            'address_details_helper' => ' ',
            'tax'                    => 'Tax',
            'tax_helper'             => ' ',
            'total'                  => 'Total',
            'total_helper'           => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'customer'               => 'Customer',
            'customer_helper'        => ' ',
            'provider'               => 'Provider',
            'provider_helper'        => ' ',
        ],
    ],
    'review' => [
        'title'          => 'Reviews',
        'title_singular' => 'Review',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'key'               => 'Key',
            'key_helper'        => ' ',
            'content'           => 'Content',
            'content_helper'    => ' ',
            'rating'            => 'Rating',
            'rating_helper'     => ' ',
            'service'           => 'Service',
            'service_helper'    => ' ',
            'booking'           => 'Booking',
            'booking_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'customer'          => 'Customer',
            'customer_helper'   => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Settings',
        'title_singular' => 'Setting',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'key'                => 'Key',
            'key_helper'         => 'A unique key for this feature, it should be all in small letters. e.g. enable_commissions',
            'description'        => 'Description',
            'description_helper' => 'Describe the usage of this feature',
            'value'              => 'Value',
            'value_helper'       => 'Can be a number e.g. for commission percentage, the value should be 20. And for booleans (to enable/disable feature) use 1 or 0',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'commission' => [
        'title'          => 'Commissions',
        'title_singular' => 'Commission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'key'               => 'Key',
            'key_helper'        => 'Unique identifier for this commission, should be in snake_case, e.g. home_cleaning_commission',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'value'             => 'Value',
            'value_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'earning' => [
        'title'          => 'Earnings',
        'title_singular' => 'Earning',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'provider'                => 'Provider',
            'provider_helper'         => ' ',
            'bookings_count'          => 'Bookings Count',
            'bookings_count_helper'   => ' ',
            'total_earning'           => 'Total Earning',
            'total_earning_helper'    => ' ',
            'admin_earning'           => 'Admin Earning',
            'admin_earning_helper'    => ' ',
            'provider_earning'        => 'Provider Earning',
            'provider_earning_helper' => ' ',
            'total_tax'               => 'Total Tax',
            'total_tax_helper'        => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'payout' => [
        'title'          => 'Payouts',
        'title_singular' => 'Payout',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'provider'          => 'Provider',
            'provider_helper'   => ' ',
            'amount'            => 'Amount',
            'amount_helper'     => ' ',
            'method'            => 'Payout Method',
            'method_helper'     => ' ',
            'paid_at'           => 'Paid At',
            'paid_at_helper'    => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'payment' => [
        'title'          => 'Payments',
        'title_singular' => 'Payment',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'user'              => 'User',
            'user_helper'       => ' ',
            'amount'            => 'Amount',
            'amount_helper'     => ' ',
            'method'            => 'Method',
            'method_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];