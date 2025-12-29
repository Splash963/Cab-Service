<!DOCTYPE html>
<html lang="en" style="margin:0;padding:0;">

<head>
    <meta charset="UTF-8">
    <title>Booking Admin View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="margin:0;padding:0;background:#f5f7fb;font-family:Arial,Helvetica,sans-serif;color:#1a1a1a;">
    <center style="width:100%;background:#f5f7fb;">
        <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width:640px;margin:0 auto;background:#ffffff;">
            <!-- Header -->
            <tr>
                <td style="padding:24px 24px 16px;border-bottom:1px solid #e6e9ef;">
                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td style="font-size:18px;font-weight:bold;color:#0f172a;">Cab Service — Admin View</td>
                            <td align="right" style="font-size:12px;color:#64748b;">Notification</td>
                        </tr>
                    </table>
                    <div style="margin-top:8px;font-size:14px;color:#334155;">
                        A new booking has been submitted. Here’s a compact admin snapshot with quick actions.
                    </div>
                </td>
            </tr>

            <!-- Booking summary -->
            <tr>
                <td style="padding:20px 24px;">
                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:8px;">
                        <tr>
                            <td style="padding:16px 16px 8px;font-size:14px;font-weight:bold;color:#0f172a;">Booking summary</td>
                        </tr>
                        <tr>
                            <td style="padding:0 16px 16px;">
                                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td style="padding:6px 0;font-size:13px;color:#334155;"><strong style="color:#0f172a;">Booking ID:</strong> <?= $booking_id ?></td>
                                        <td style="padding:6px 0;font-size:13px;color:#334155;" align="right"><strong style="color:#0f172a;">Status:</strong> <?= $status ?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:6px 0;font-size:13px;color:#334155;"><strong style="color:#0f172a;">Customer:</strong> <?= $user_name ?></td>
                                        <td style="padding:6px 0;font-size:13px;color:#334155;" align="right"><strong style="color:#0f172a;">Phone:</strong> <?= $phone_no ?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:6px 0;font-size:13px;color:#334155;"><strong style="color:#0f172a;">Service:</strong> <?= $ride_type ?></td>
                                        <td style="padding:6px 0;font-size:13px;color:#334155;" align="right"><strong style="color:#0f172a;">Vehicle:</strong> <?= $vehicle_type ?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:6px 0;font-size:13px;color:#334155;"><strong style="color:#0f172a;">Pickup:</strong> <?= $pickup_location ?></td>
                                        <td style="padding:6px 0;font-size:13px;color:#334155;" align="right"><strong style="color:#0f172a;">Drop-off:</strong> <?= $drop_location ?></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:6px 0;font-size:13px;color:#334155;"><strong style="color:#0f172a;">Date & time:</strong> <?= $pickup_date ?>, <?= $pickup_time ?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- Notes -->
            <tr>
                <td style="padding:0 24px 20px;">
                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#fff7ed;border:1px solid #fed7aa;border-radius:8px;">
                        <tr>
                            <td style="padding:16px;font-size:13px;color:#7c2d12;">
                                <strong style="color:#9a3412;">Internal note:</strong> <?= $additional_notes ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- Actions -->
            <tr>
                <td style="padding:0 24px 24px;">
                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td align="left" style="padding-right:8px;">
                                <a href="https://yourdomain.com/admin/bookings/BK-2025-1047"
                                    style="display:inline-block;background:#0ea5e9;color:#ffffff;text-decoration:none;font-size:14px;font-weight:bold;padding:12px 16px;border-radius:6px;">
                                    Open in Admin
                                </a>
                            </td>
                            <td align="left">
                                <a href="https://yourdomain.com/admin/bookings/BK-2025-1047/manage"
                                    style="display:inline-block;background:#10b981;color:#ffffff;text-decoration:none;font-size:14px;font-weight:bold;padding:12px 16px;border-radius:6px;">
                                    Manage booking
                                </a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- Footer -->
            <!-- <tr>
                <td style="padding:16px 24px 24px;border-top:1px solid #e6e9ef;font-size:12px;color:#64748b;">
                    <div style="margin-bottom:6px;">This is an automated message from Cab Service Admin.</div>
                    <div style="margin-bottom:6px;">Need help? Contact support at support@yourdomain.com</div>
                    <div>&copy; 2025 Cab Service. All rights reserved.</div>
                </td>
            </tr> -->
        </table>
    </center>
</body>

</html>