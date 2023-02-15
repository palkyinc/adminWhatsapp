<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wa_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('field', 20);
            $table->string('value.messaging_product', 20);
            $table->string('value.metadata.display_phone_number', 20);
            $table->string('value.metadata.phone_number_id', 20);
            $table->string('value.contacts.profile.name', 20);
            $table->string('value.contacts.wa_id', 20);
            $table->string('value.messages.from', 20);
            $table->string('value.messages.id', 20);
            $table->timestamps('value.messages.timestamp', 20);
            $table->string('value.messages.type', 20);
            $table->text('value.messages.text.body');
            $table->string('object', 30);
            $table->string('entry.id', 20);
            $table->string('entry.changes.value.messaging_product', 20);
            $table->string('entry.changes.value.metadata.display_phone_number', 20);
            $table->string('entry.changes.value.metadata.phone_number_id', 20);
            $table->string('entry.changes.value.contacts.profile.name', 20);
            $table->string('entry.changes.value.contacts.wa_id', 20);
            $table->string('entry.changes.value.messages.from', 20);
            $table->string('entry.changes.value.messages.id', 20);
            $table->string('entry.changes.value.messages.timestamp', 20);
            $table->text('entry.changes.value.messages.text.body');
            $table->string('entry.changes.value.messages.type', 20);
            $table->string('entry.changes.field', 20);
            $table->string('entry.changes.value.messages.reaction.message_id', 20);
            $table->string('entry.changes.value.messages.reaction.emoji', 20);
            $table->string('entry.changes.value.messages.image.caption', 20);
            $table->string('entry.changes.value.messages.image.mime_type', 20);
            $table->string('entry.changes.value.messages.image.sha256', 64);
            $table->string('entry.changes.value.messages.image.id', 20);
            $table->string('entry.changes.value.messages.sticker.mime_type', 20);
            $table->string('entry.changes.value.messages.sticker.sha256', 64);
            $table->string('entry.changes.value.messages.sticker.id', 20);
            $table->string('entry.changes.value.messages.errors.code',20);
            $table->string('entry.changes.value.messages.errors.details', 100);
            $table->string('entry.changes.value.messages.errors.title', 100);
            $table->string('entry.changes.value.messages.location.latitude', 20);
            $table->string('entry.changes.value.messages.location.longitude', 20);
            $table->string('entry.changes.value.messages.location.name', 20);
            $table->string('entry.changes.value.messages.location.address', 50) ;
            $table->string('entry.changes.value.messages.contacts.addresses.city', 30);
            $table->string('entry.changes.value.messages.contacts.addresses.country', 30);
            $table->string('entry.changes.value.messages.contacts.addresses.country_code', 20);
            $table->string('entry.changes.value.messages.contacts.addresses.state', 20);
            $table->string('entry.changes.value.messages.contacts.addresses.street', 20);
            $table->string('entry.changes.value.messages.contacts.addresses.type', 20);
            $table->string('entry.changes.value.messages.contacts.addresses.zip', 20);
            $table->string('entry.changes.value.messages.contacts.birthday', 20);
            $table->string('entry.changes.value.messages.contacts.emails.email', 50);
            $table->string('entry.changes.value.messages.contacts.emails.type', 20);
            $table->string('entry.changes.value.messages.contacts.name.formatted_name', 30);
            $table->string('entry.changes.value.messages.contacts.name.first_name', 20);
            $table->string('entry.changes.value.messages.contacts.name.last_name', 20);
            $table->string('entry.changes.value.messages.contacts.name.middle_name', 20);
            $table->string('entry.changes.value.messages.contacts.name.suffix', 20);
            $table->string('entry.changes.value.messages.contacts.name.prefix', 20);
            $table->string('entry.changes.value.messages.contacts.org.company', 20);
            $table->string('entry.changes.value.messages.contacts.org.department', 20);
            $table->string('entry.changes.value.messages.contacts.org.title', 20);
            $table->string('entry.changes.value.messages.contacts.phones.phone', 20);
            $table->string('entry.changes.value.messages.contacts.phones.wa_id', 20);
            $table->string('entry.changes.value.messages.contacts.phones.type', 20);
            $table->string('entry.changes.value.messages.contacts.urls.url', 50);
            $table->string('entry.changes.value.messages.contacts.urls.type', 20);
            $table->string('entry.changes.value.messages.context.from', 20);
            $table->string('entry.changes.value.messages.context.id', 20);
            $table->string('entry.changes.value.messages.button.text', 20);
            $table->string('entry.changes.value.messages.button.payload', 20);
            $table->string('entry.changes.value.messages.interactive.list_reply.id', 20);
            $table->string('entry.changes.value.messages.interactive.list_reply.title', 20);
            $table->string('entry.changes.value.messages.interactive.list_reply.description', 20);
            $table->string('entry.changes.value.messages.interactive.type', 20);
            $table->string('entry.changes.value.messages.interactive.button_reply.id', 20);
            $table->string('entry.changes.value.messages.interactive.button_reply.title', 20);
            $table->string('entry.changes.value.messages.referral.source_url', 50);
            $table->string('entry.changes.value.messages.referral.source_id', 20);
            $table->string('entry.changes.value.messages.referral.source_type', 20);
            $table->string('entry.changes.value.messages.referral.headline', 20);
            $table->string('entry.changes.value.messages.referral.body', 20);
            $table->string('entry.changes.value.messages.referral.media_type', 20);
            $table->string('entry.changes.value.messages.referral.image_url', 50);
            $table->string('entry.changes.value.messages.referral.video_url', 50);
            $table->string('entry.changes.value.messages.referral.thumbnail_url', 50);
            $table->string('entry.changes.value.messages.context.referred_product.catalog_id', 20);
            $table->string('entry.changes.value.messages.context.referred_product.product_retailer_id', 20);
            $table->string('entry.changes.value.messages.order.catalog_id', 20);
            $table->string('entry.changes.value.messages.order.product_items.product_retailer_id', 30);
            $table->string('entry.changes.value.messages.order.product_items.quantity', 20);
            $table->string('entry.changes.value.messages.order.product_items.item_price', 20);
            $table->string('entry.changes.value.messages.order.product_items.currency', 20);
            $table->string('entry.changes.value.messages.order.text', 50);
            $table->string('entry.changes.value.messages.system.body', 50);
            $table->string('entry.changes.value.messages.system.new_wa_id', 20);
            $table->string('entry.changes.value.messages.system.type', 20);
            $table->string('entry.changes.value.statuses.id', 20);
            $table->string('entry.changes.value.statuses.recipient_id', 20);
            $table->string('entry.changes.value.statuses.status', 20);
            $table->timestamps('entry.changes.value.statuses.timestamp');
            $table->string('entry.changes.value.statuses.conversation.id', 20);
            $table->timestamps('entry.changes.value.statuses.conversation.expiration_timestamp');
            $table->string('entry.changes.value.statuses.conversation.origin.type', 20);
            $table->string('entry.changes.value.statuses.pricing.pricing_model', 20);
            $table->string('entry.changes.value.statuses.pricing.billable', 20);
            $table->string('entry.changes.value.statuses.pricing.category', 20);
            $table->string('entry.changes.value.statuses.errors.code', 20);
            $table->string('entry.changes.value.statuses.errors.title', 100);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wa_logs');
    }
}
