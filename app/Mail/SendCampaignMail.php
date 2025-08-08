<?php

namespace App\Mail;

use App\Models\Campaign;
use App\Models\Contacts;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendCampaignMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public Campaign $campaign;
    public Contacts $contact;

    /**
     * Create a new message instance.
     */
    public function __construct(Campaign $campaign, Contacts $contact)
    {
        $this->campaign = $campaign;
        $this->contact = $contact;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: [$this->campaign->sender_email => $this->campaign->sender_name],
            subject: $this->campaign->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.campaign',
            with: [
                'campaign' => $this->campaign,
                'contact' => $this->contact,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
