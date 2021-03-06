<?php

/*
 * This file is part of the Passbook package.
 *
 * (c) Eymen Gunay <eymen@egunay.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Passbook;

use Passbook\Pass\Structure;
use Passbook\Pass\Location;
use Passbook\Pass\Barcode;
use Passbook\Pass\Image;

/**
 * PassInterface
 *
 * @author Eymen Gunay <eymen@egunay.com>
 */
interface PassInterface
{
    public function __construct($serialNumber, $description);

    /**
     * {@inheritdoc}
     */
    public function setSerialNumber($serialNumber);

    /**
     * {@inheritdoc}
     */
    public function getSerialNumber();

    /**
     * {@inheritdoc}
     */
    public function setDescription($description);

    /**
     * {@inheritdoc}
     */
    public function getDescription();

    /**
     * {@inheritdoc}
     */
    public function getFormatVersion();

    /**
     * {@inheritdoc}
     */
    public function setFormatVersion($formatVersion);

    /**
     * {@inheritdoc}
     */
    public function getType();

    /**
     * {@inheritdoc}
     */
    public function setType($type);

    /**
     * {@inheritdoc}
     */
    public function setStructure($structure);

    /**
     * {@inheritdoc}
     */
    public function getStructure();

    /**
     * {@inheritdoc}
     */
    public function addImage(Image $image);

    /**
     * {@inheritdoc}
     */
    public function getImages();

    /**
     * {@inheritdoc}
     */
    public function addAssociatedStoreIdentifier($associatedStoreIdentifier);

    /**
     * {@inheritdoc}
     */
    public function getAssociatedStoreIdentifiers();

    /**
     * {@inheritdoc}
     */
    public function addLocation(Location $location);

    /**
     * {@inheritdoc}
     */
    public function getLocations();

    /**
     * {@inheritdoc}
     */
    public function setRelevantDate($relevantDate);

    /**
     * {@inheritdoc}
     */
    public function getRelevantDate();

    /**
     * {@inheritdoc}
     */
    public function setBarcode(Barcode $barcode);

    /**
     * {@inheritdoc}
     */
    public function getBarcode();

    /**
     * {@inheritdoc}
     */
    public function setBackgroundColor($backgroundColor);

    /**
     * {@inheritdoc}
     */
    public function getBackgroundColor();

    /**
     * {@inheritdoc}
     */
    public function setForegroundColor($foregroundColor);

    /**
     * {@inheritdoc}
     */
    public function getForegroundColor();

    /**
     * {@inheritdoc}
     */
    public function setLabelColor($labelColor);

    /**
     * {@inheritdoc}
     */
    public function getLabelColor();

    /**
     * {@inheritdoc}
     */
    public function setLogoText($logoText);

    /**
     * {@inheritdoc}
     */
    public function getLogoText();

    /**
     * {@inheritdoc}
     */
    public function setSuppressStripShine($suppressStripShine);

    /**
     * {@inheritdoc}
     */
    public function getSuppressStripShine();

    /**
     * {@inheritdoc}
     */
    public function setAuthenticationToken($authenticationToken);

    /**
     * {@inheritdoc}
     */
    public function getAuthenticationToken();

    /**
     * {@inheritdoc}
     */
    public function setWebServiceURL($webServiceURL);

    /**
     * {@inheritdoc}
     */
    public function getWebServiceURL();

    /**
     * {@inheritdoc}
     */
    public function setPassTypeIdentifier($passTypeIdentifier);

    /**
     * {@inheritdoc}
     */
    public function getPassTypeIdentifier();

    /**
     * {@inheritdoc}
     */
    public function setTeamIdentifier($teamIdentifier);

    /**
     * {@inheritdoc}
     */
    public function getTeamIdentifier();

    /**
     * {@inheritdoc}
     */
    public function setOrganizationName($organizationName);

    /**
     * {@inheritdoc}
     */
    public function getOrganizationName();
}